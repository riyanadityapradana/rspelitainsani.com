<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='beranda-l';
		$this->render('isi-beranda', array(
			'homepageContent' => $this->buildHomepageContentSections(),
		));
	}

	protected function buildHomepageContentSections()
	{
		$sections = array();
		$categories = array(
			'berita' => 1,
			'pengumuman' => 2,
			'artikel' => 3,
		);

		foreach ($categories as $key => $categoryId) {
			$sections[$key] = Konten::model()->findAllByAttributes(
				array(
					'kategori' => $categoryId,
					'status' => 1,
				),
				array(
					'order' => 'tgl_entry DESC, id_konten DESC',
					'limit' => 4,
				)
			);
		}

		return $sections;
	}

	public function actionMaintenance()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='maintenance';
		$this->render('maintenance');
	}

	public function actionDokter()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='beranda-l';
		$this->render('dokter');
	}

	public function actionGaleri()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='beranda-l';
		// $this->render('');

		$criteria=new CDbCriteria();
		$criteria->order = 'id_direktori DESC';
	    $count=Dirgaleri::model()->count($criteria);
	    $pages=new CPagination($count);

	    // results per page
	    $pages->pageSize=6;
	    $pages->applyLimit($criteria);
	    $models=Dirgaleri::model()->findAll($criteria);

	    $this->render('galeri', array(
	    'models' => $models,
	         'pages' => $pages
	    ));
	}

	

	public function actionTentang()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='beranda-l';
		$this->render('tentang');
	}

	public function actionKontak()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='beranda-l';
		$this->render('kontak');
	}

	public function actionKlaim()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

		$this->layout='beranda-l';
		$this->render('klaim');
	}

	public function actionLayanan()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='beranda-l';
		$this->render('layanan');
	}

	public function actionFasilitas()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='beranda-l';
		$this->render('fasilitas');
	}

	public function actionJadwalpoli()
	{
		$this->layout='beranda-l';
		$q = isset($_GET['q']) ? trim($_GET['q']) : '';
		$dashboardData = $this->buildJadwalPoliDashboard($q);

		$this->render('jadwalpoli', array(
			'q' => $q,
			'hariTabs' => $dashboardData['hariTabs'],
			'activeHari' => $dashboardData['activeHari'],
			'groupedSchedulesByDay' => $dashboardData['groupedSchedulesByDay'],
			'totalClinics' => $dashboardData['totalClinics'],
			'totalSchedules' => $dashboardData['totalSchedules'],
		));
	}

	protected function buildJadwalPoliDashboard($searchTerm = '')
	{
		$hariTabs = $this->getHariDalamSeminggu();
		$hariSekarang = $this->getHariSekarangIndonesia();
		$normalizedSearch = $this->normalizeJadwalKeyword($searchTerm);
		$klinikList = Klinik::model()->findAll(array('order' => 'nama_klinik ASC'));
		$jadwalList = Jadwalpoli::model()->findAll();
		$klinikMap = array();
		$dokterIds = array();

		foreach ($klinikList as $klinik) {
			$klinikMap[$klinik->id_klinik] = $klinik;
		}

		foreach ($jadwalList as $jadwal) {
			if ($jadwal->dokter !== null && $jadwal->dokter !== '') {
				$dokterIds[$jadwal->dokter] = true;
			}
		}

		$dokterMap = array();
		if (!empty($dokterIds)) {
			$dokterList = Dokter::model()->findAllByPk(array_keys($dokterIds));
			foreach ($dokterList as $dokter) {
				$dokterMap[$dokter->id_dokter] = $dokter;
			}
		}

		$rowsByDay = array();
		foreach ($hariTabs as $hari) {
			$rowsByDay[$hari] = array();
		}

		$matchedClinicIds = array();
		$totalSchedules = 0;

		foreach ($jadwalList as $jadwal) {
			if (!isset($klinikMap[$jadwal->klinik])) {
				continue;
			}

			$klinik = $klinikMap[$jadwal->klinik];
			$dokter = isset($dokterMap[$jadwal->dokter]) ? $dokterMap[$jadwal->dokter] : null;
			$hariTokens = $this->extractHariTokens($jadwal->hari);
			if (empty($hariTokens)) {
				continue;
			}

			$row = array(
				'clinic_id' => $klinik->id_klinik,
				'clinic_name' => $klinik->nama_klinik,
				'themeClass' => $this->resolveKlinikThemeClass($klinik->nama_klinik),
				'dokter' => $dokter ? $dokter->nama_dokter : '-',
				'foto' => $dokter ? $dokter->foto : '',
				'hari' => $jadwal->hari,
				'hari_tokens' => $hariTokens,
				'hari_display' => $this->formatHariLabel($jadwal->hari),
				'jam' => $jadwal->jam,
				'keterangan' => $jadwal->keterangan,
				'keterangan_detail' => $this->extractKeteranganDetail($jadwal->keterangan),
				'keteranganBadges' => $this->extractKeteranganBadges($jadwal->keterangan),
			);

			if (!$this->matchesJadwalDashboardSearch($row, $normalizedSearch)) {
				continue;
			}

			$matchedClinicIds[$klinik->id_klinik] = true;
			foreach ($hariTokens as $hariToken) {
				if (!isset($rowsByDay[$hariToken])) {
					continue;
				}

				$status = $this->buildJadwalPraktikStatus($hariToken, $jadwal->jam, $hariSekarang);
				$rowsByDay[$hariToken][] = array_merge($row, array(
					'hari_tab' => $hariToken,
					'status' => $status,
				));
				$totalSchedules++;
			}
		}

		$groupedSchedulesByDay = array();
		foreach ($hariTabs as $hari) {
			$groupedSchedulesByDay[$hari] = $this->groupDashboardRowsByClinic($rowsByDay[$hari]);
		}

		return array(
			'hariTabs' => $hariTabs,
			'activeHari' => $this->resolveHariAktifDashboard($groupedSchedulesByDay, $hariSekarang),
			'groupedSchedulesByDay' => $groupedSchedulesByDay,
			'totalClinics' => count($matchedClinicIds),
			'totalSchedules' => $totalSchedules,
		);
	}

	protected function matchesJadwalDashboardSearch($row, $normalizedSearch)
	{
		if ($normalizedSearch === '') {
			return true;
		}

		$haystack = implode(' ', array(
			$row['clinic_name'],
			$row['dokter'],
			$row['hari_display'],
			$row['jam'],
			$row['keterangan'],
			$row['keterangan_detail'],
		));

		return strpos($this->normalizeJadwalKeyword($haystack), $normalizedSearch) !== false;
	}

	protected function groupDashboardRowsByClinic($rows)
	{
		if (empty($rows)) {
			return array();
		}

		usort($rows, array($this, 'compareDashboardRows'));
		$grouped = array();

		foreach ($rows as $row) {
			$key = $row['clinic_id'];
			if (!isset($grouped[$key])) {
				$grouped[$key] = array(
					'clinic_id' => $row['clinic_id'],
					'clinic_name' => $row['clinic_name'],
					'themeClass' => $row['themeClass'],
					'count' => 0,
					'rows' => array(),
				);
			}

			$grouped[$key]['rows'][] = $row;
			$grouped[$key]['count']++;
		}

		return array_values($grouped);
	}

	protected function compareDashboardRows($left, $right)
	{
		$clinicCompare = strcmp(
			$this->normalizeJadwalKeyword($left['clinic_name']),
			$this->normalizeJadwalKeyword($right['clinic_name'])
		);

		if ($clinicCompare !== 0) {
			return $clinicCompare;
		}

		$leftTime = $this->extractJamSortOrder($left['jam']);
		$rightTime = $this->extractJamSortOrder($right['jam']);
		if ($leftTime !== $rightTime) {
			return $leftTime - $rightTime;
		}

		return strcmp(
			$this->normalizeJadwalKeyword($left['dokter']),
			$this->normalizeJadwalKeyword($right['dokter'])
		);
	}

	protected function getHariDalamSeminggu()
	{
		return array('Senin', 'Selasa', 'Rabu', 'Kamis', "Jum'at", 'Sabtu', 'Minggu');
	}

	protected function getHariSekarangIndonesia()
	{
		$dayMap = array(
			'Monday' => 'Senin',
			'Tuesday' => 'Selasa',
			'Wednesday' => 'Rabu',
			'Thursday' => 'Kamis',
			'Friday' => "Jum'at",
			'Saturday' => 'Sabtu',
			'Sunday' => 'Minggu',
		);

		$englishDay = date('l');
		return isset($dayMap[$englishDay]) ? $dayMap[$englishDay] : 'Senin';
	}

	protected function resolveHariAktifDashboard($groupedSchedulesByDay, $hariSekarang)
	{
		if (!empty($groupedSchedulesByDay[$hariSekarang])) {
			return $hariSekarang;
		}

		foreach ($this->getHariDalamSeminggu() as $hari) {
			if (!empty($groupedSchedulesByDay[$hari])) {
				return $hari;
			}
		}

		return $hariSekarang;
	}

	protected function buildJadwalPraktikStatus($hariJadwal, $jamRange, $hariSekarang)
	{
		if ($hariJadwal !== $hariSekarang) {
			return array(
				'text' => 'Tutup Hari Ini',
				'class' => 'status-closed',
				'icon' => 'oi oi-circle-x',
			);
		}

		$jamParts = $this->extractJamRangeParts($jamRange);
		if (empty($jamParts)) {
			return array(
				'text' => 'Lihat Jadwal',
				'class' => 'status-info',
				'icon' => 'oi oi-info',
			);
		}

		$now = strtotime(date('H:i:s'));
		$start = strtotime($jamParts['start'] . ':00');
		$end = strtotime($jamParts['end'] . ':00');

		if ($now >= $start && $now <= $end) {
			return array(
				'text' => 'Sedang Praktik',
				'class' => 'status-open',
				'icon' => 'oi oi-check',
			);
		}

		if ($now < $start) {
			return array(
				'text' => 'Buka ' . $jamParts['start'],
				'class' => 'status-soon',
				'icon' => 'oi oi-clock',
			);
		}

		return array(
			'text' => 'Sudah Tutup',
			'class' => 'status-closed',
			'icon' => 'oi oi-circle-x',
		);
	}

	protected function extractJamRangeParts($jamRange)
	{
		preg_match_all('/(\d{1,2})[.:](\d{2})/', (string) $jamRange, $matches);
		if (empty($matches[0])) {
			return array();
		}

		$start = str_replace('.', ':', $matches[0][0]);
		$end = isset($matches[0][1]) ? str_replace('.', ':', $matches[0][1]) : $start;

		return array(
			'start' => $start,
			'end' => $end,
		);
	}

	protected function buildJadwalPoliGroups($searchTerm = '')
	{
		$groupedSchedules = array();
		$normalizedSearch = $this->normalizeJadwalKeyword($searchTerm);
		$klinikList = Klinik::model()->findAll(array('order' => 'nama_klinik ASC'));
		$jadwalList = Jadwalpoli::model()->findAll(array('order' => 'klinik ASC, hari ASC, jam ASC, dokter ASC'));
		$dokterIds = array();

		foreach ($jadwalList as $jadwal) {
			if ($jadwal->dokter !== null && $jadwal->dokter !== '') {
				$dokterIds[$jadwal->dokter] = true;
			}
		}

		$dokterMap = array();
		if (!empty($dokterIds)) {
			$dokterList = Dokter::model()->findAllByPk(array_keys($dokterIds));
			foreach ($dokterList as $dokter) {
				$dokterMap[$dokter->id_dokter] = $dokter->nama_dokter;
			}
		}

		$jadwalByKlinik = array();
		foreach ($jadwalList as $jadwal) {
			if (!isset($jadwalByKlinik[$jadwal->klinik])) {
				$jadwalByKlinik[$jadwal->klinik] = array();
			}

			$jadwalByKlinik[$jadwal->klinik][] = array(
				'dokter' => isset($dokterMap[$jadwal->dokter]) ? $dokterMap[$jadwal->dokter] : '-',
				'hari' => $jadwal->hari,
				'hari_tokens' => $this->extractHariTokens($jadwal->hari),
				'hari_display' => $this->formatHariLabel($jadwal->hari),
				'jam' => $jadwal->jam,
				'keterangan' => $jadwal->keterangan,
				'keterangan_detail' => $this->extractKeteranganDetail($jadwal->keterangan),
				'keteranganBadges' => $this->extractKeteranganBadges($jadwal->keterangan),
			);
		}

		foreach ($klinikList as $klinik) {
			$rows = isset($jadwalByKlinik[$klinik->id_klinik]) ? $jadwalByKlinik[$klinik->id_klinik] : array();
			$this->sortJadwalRows($rows);

			if ($this->matchesJadwalSearch($klinik->nama_klinik, $rows, $normalizedSearch)) {
				$groupedSchedules[] = array(
					'id' => 'klinik-' . $klinik->id_klinik,
					'klinik' => $klinik->nama_klinik,
					'themeClass' => $this->resolveKlinikThemeClass($klinik->nama_klinik),
					'rows' => $rows,
				);
			}
		}

		return $groupedSchedules;
	}

	protected function matchesJadwalSearch($namaKlinik, $rows, $normalizedSearch)
	{
		if ($normalizedSearch === '') {
			return true;
		}

		if (strpos($this->normalizeJadwalKeyword($namaKlinik), $normalizedSearch) !== false) {
			return true;
		}

		foreach ($rows as $row) {
			$haystack = implode(' ', array(
				$row['dokter'],
				$row['hari'],
				$row['jam'],
				$row['keterangan'],
			));

			if (strpos($this->normalizeJadwalKeyword($haystack), $normalizedSearch) !== false) {
				return true;
			}
		}

		return false;
	}

	protected function sortJadwalRows(&$rows)
	{
		if (count($rows) < 2) {
			return;
		}

		usort($rows, array($this, 'compareJadwalRows'));
	}

	protected function compareJadwalRows($left, $right)
	{
		$leftDay = $this->extractHariSortOrder(isset($left['hari']) ? $left['hari'] : '');
		$rightDay = $this->extractHariSortOrder(isset($right['hari']) ? $right['hari'] : '');

		if ($leftDay !== $rightDay) {
			return $leftDay - $rightDay;
		}

		$leftTime = $this->extractJamSortOrder(isset($left['jam']) ? $left['jam'] : '');
		$rightTime = $this->extractJamSortOrder(isset($right['jam']) ? $right['jam'] : '');

		if ($leftTime !== $rightTime) {
			return $leftTime - $rightTime;
		}

		return strcmp(
			$this->normalizeJadwalKeyword(isset($left['dokter']) ? $left['dokter'] : ''),
			$this->normalizeJadwalKeyword(isset($right['dokter']) ? $right['dokter'] : '')
		);
	}

	protected function extractHariSortOrder($hari)
	{
		$hariTokens = $this->extractHariTokens($hari);
		if (!empty($hariTokens)) {
			$dayOrder = $this->getHariOrderMap();
			$firstHari = $hariTokens[0];
			if (isset($dayOrder[$firstHari])) {
				return $dayOrder[$firstHari];
			}
		}

		return 99;
	}

	protected function formatHariLabel($hari)
	{
		$formatted = $this->extractHariTokens($hari);

		return empty($formatted) ? '-' : implode(', ', $formatted);
	}

	protected function extractHariTokens($hari)
	{
		$normalized = $this->normalizeHariExpression($hari);
		if ($normalized === '') {
			return array();
		}

		$dayPattern = '(senin|selasa|rabu|kamis|jum\'?at|sabtu|minggu|ahad)';
		$rangeConnectorPattern = '(?:s\/d|sd|-|sampai|hingga)';
		$matches = array();
		$tokens = array();

		preg_match_all('/' . $dayPattern . '(?:\s*' . $rangeConnectorPattern . '\s*' . $dayPattern . ')?/u', $normalized, $matches);

		if (empty($matches[0])) {
			return array();
		}

		foreach ($matches[0] as $match) {
			$segment = trim($match);
			if ($segment === '') {
				continue;
			}

			if (preg_match('/^' . $dayPattern . '\s*' . $rangeConnectorPattern . '\s*' . $dayPattern . '$/u', $segment, $rangeMatch)) {
				$tokens = array_merge($tokens, $this->expandHariRange($rangeMatch[1], $rangeMatch[2]));
				continue;
			}

			$beautified = $this->beautifyHariToken($segment);
			if ($beautified !== '') {
				$tokens[] = $beautified;
			}
		}

		return array_values(array_unique($tokens));
	}

	protected function beautifyHariToken($hari)
	{
		$normalized = $this->normalizeHariToken($hari);
		$map = $this->getHariLabelMap();

		return isset($map[$normalized]) ? $map[$normalized] : '';
	}

	protected function expandHariRange($startHari, $endHari)
	{
		$startLabel = $this->beautifyHariToken($startHari);
		$endLabel = $this->beautifyHariToken($endHari);
		$dayOrder = $this->getHariDalamSeminggu();

		if ($startLabel === '' || $endLabel === '') {
			return array();
		}

		$startIndex = array_search($startLabel, $dayOrder, true);
		$endIndex = array_search($endLabel, $dayOrder, true);

		if ($startIndex === false || $endIndex === false) {
			return array($startLabel, $endLabel);
		}

		if ($startIndex <= $endIndex) {
			return array_slice($dayOrder, $startIndex, ($endIndex - $startIndex) + 1);
		}

		return array($startLabel, $endLabel);
	}

	protected function normalizeHariExpression($hari)
	{
		$normalized = $this->normalizeHariToken($hari);
		$normalized = preg_replace('/\bs\s*\/?\s*d\b/u', 's/d', $normalized);
		$normalized = preg_replace('/\b(sampai|hingga)\b/u', 's/d', $normalized);
		$normalized = preg_replace('/\s*-\s*/u', '-', $normalized);
		$normalized = preg_replace('/\s*&\s*/u', ', ', $normalized);
		$normalized = preg_replace('/\s+dan\s+/u', ', ', $normalized);
		$normalized = preg_replace('/\s+/u', ' ', $normalized);

		return trim($normalized);
	}

	protected function normalizeHariToken($hari)
	{
		$normalized = $this->normalizeJadwalKeyword($hari);
		$normalized = str_replace(array('’', '`', '.'), array("'", "'", ' '), $normalized);
		$normalized = preg_replace('/[^a-z\/\-\',\s]/u', ' ', $normalized);
		$normalized = preg_replace('/\s+/u', ' ', $normalized);

		return trim($normalized);
	}

	protected function getHariLabelMap()
	{
		return array(
			'senin' => 'Senin',
			'selasa' => 'Selasa',
			'rabu' => 'Rabu',
			'kamis' => 'Kamis',
			'jumat' => "Jum'at",
			"jum'at" => "Jum'at",
			'sabtu' => 'Sabtu',
			'minggu' => 'Minggu',
			'ahad' => 'Minggu',
		);
	}

	protected function getHariOrderMap()
	{
		return array(
			'Senin' => 1,
			'Selasa' => 2,
			'Rabu' => 3,
			'Kamis' => 4,
			"Jum'at" => 5,
			'Sabtu' => 6,
			'Minggu' => 7,
		);
	}

	protected function extractJamSortOrder($jam)
	{
		if (preg_match('/(\d{1,2})[.:](\d{2})/', $jam, $matches)) {
			return ((int) $matches[1] * 60) + (int) $matches[2];
		}

		return 9999;
	}

	protected function extractKeteranganBadges($keterangan)
	{
		$badges = array();
		$normalized = $this->normalizeJadwalKeyword($keterangan);

		$definitions = array(
			array(
				'keywords' => array('bpjs'),
				'label' => 'BPJS',
				'class' => 'badge-bpjs',
				'icon' => 'oi oi-check',
			),
			array(
				'keywords' => array('umum'),
				'label' => 'Umum',
				'class' => 'badge-umum',
				'icon' => 'oi oi-person',
			),
			array(
				'keywords' => array('asuransi'),
				'label' => 'Asuransi',
				'class' => 'badge-asuransi',
				'icon' => 'oi oi-shield',
			),
			array(
				'keywords' => array('appointment', 'appt', 'janji', 'booking'),
				'label' => 'Appointment',
				'class' => 'badge-appointment',
				'icon' => 'oi oi-calendar',
			),
		);

		foreach ($definitions as $definition) {
			foreach ($definition['keywords'] as $keyword) {
				if (strpos($normalized, $keyword) !== false) {
					$badges[] = array(
						'label' => $definition['label'],
						'class' => $definition['class'],
						'icon' => $definition['icon'],
					);
					break;
				}
			}
		}

		return $badges;
	}

	protected function extractKeteranganDetail($keterangan)
	{
		$detail = trim((string) $keterangan);
		if ($detail === '') {
			return '';
		}

		$patterns = array(
			'/\bpasien\b/i',
			'/\bbpjs\b/i',
			'/\bumum\b/i',
			'/\basuransi\b/i',
			'/\bappointment\b/i',
			'/\bappt\b/i',
			'/\bjanji\b/i',
			'/\bbooking\b/i',
			'/\bdan\b/i',
			'/\batau\b/i',
		);

		$detail = preg_replace($patterns, ' ', $detail);
		$detail = preg_replace('/[,\/]+/', ' ', $detail);
		$detail = preg_replace('/\s+/', ' ', $detail);
		$detail = trim($detail, " \t\n\r\0\x0B-");

		return $detail;
	}

	protected function resolveKlinikThemeClass($namaKlinik)
	{
		$normalized = $this->normalizeJadwalKeyword($namaKlinik);

		if (strpos($normalized, 'gigi') !== false || strpos($normalized, 'mulut') !== false) {
			return 'theme-gigi';
		}

		if (strpos($normalized, 'anak') !== false) {
			return 'theme-anak';
		}

		if (strpos($normalized, 'jantung') !== false || strpos($normalized, 'paru') !== false) {
			return 'theme-jantung';
		}

		if (strpos($normalized, 'mata') !== false || strpos($normalized, 'tht') !== false) {
			return 'theme-mata';
		}

		if (strpos($normalized, 'kandungan') !== false || strpos($normalized, 'obgyn') !== false) {
			return 'theme-kandungan';
		}

		if (strpos($normalized, 'bedah') !== false || strpos($normalized, 'ortopedi') !== false) {
			return 'theme-bedah';
		}

		return 'theme-umum';
	}

	protected function normalizeJadwalKeyword($value)
	{
		$value = trim((string) $value);

		if (function_exists('mb_strtolower')) {
			return mb_strtolower($value, 'UTF-8');
		}

		return strtolower($value);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->layout='login';
		$model=new LoginForm;
		$userModel=new User;
		$showUserModal=false;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->request->baseUrl.'/konten/admin');
		}

		if(isset($_POST['User']))
		{
			$showUserModal=true;
			$userModel->attributes=$_POST['User'];
			$userModel->username=trim($userModel->username);
			$userModel->nama=trim($userModel->nama);
			$userModel->level=1;

			if($userModel->username==='') {
				$userModel->addError('username', 'Username tidak boleh kosong.');
			} elseif(User::model()->exists('username=:username', array(':username'=>$userModel->username))) {
				$userModel->addError('username', 'Username sudah terdaftar.');
			}

			if(trim($userModel->password)==='') {
				$userModel->addError('password', 'Password tidak boleh kosong.');
			}

			if($userModel->nama==='') {
				$userModel->addError('nama', 'Nama tidak boleh kosong.');
			}

			if(!$userModel->hasErrors() && $userModel->save()) {
				Yii::app()->user->setFlash('success', 'Data user berhasil ditambahkan. Silakan login menggunakan akun baru.');
				$this->refresh();
			}
		}
		// display the login form
		$this->render('login',array(
			'model'=>$model,
			'userModel'=>$userModel,
			'showUserModal'=>$showUserModal,
		));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
