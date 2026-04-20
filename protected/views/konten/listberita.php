<?php

$kategori = Kategori::model()->findByAttributes(array('id_kategori' => $id));
$kontenList = Konten::model()->findAllByAttributes(
	array('kategori' => $id, 'status' => 1),
	array('order' => 'tgl_entry DESC, id_konten DESC')
);
$kontenByYear = array();

foreach ($kontenList as $kontenItem) {
	$yearKey = 'Tanpa Tahun';

	if (!empty($kontenItem->tgl_entry)) {
		$timestamp = strtotime($kontenItem->tgl_entry);
		if ($timestamp !== false) {
			$yearKey = date('Y', $timestamp);
		}
	}

	if (!isset($kontenByYear[$yearKey])) {
		$kontenByYear[$yearKey] = array();
	}

	$kontenByYear[$yearKey][] = $kontenItem;
}

uksort($kontenByYear, function ($left, $right) {
	if ($left === 'Tanpa Tahun') {
		return 1;
	}

	if ($right === 'Tanpa Tahun') {
		return -1;
	}

	return strcmp($right, $left);
});

?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/themes/drcare/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>

	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Daftar <?php echo $kategori->nama_kategori; ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<style type="text/css">
		.year-section + .year-section {
			margin-top: 3rem;
		}

		.year-badge {
			display: inline-flex;
			align-items: center;
			padding: 0.7rem 1.4rem;
			border-radius: 999px;
			background: #3bb3c2;
			color: #fff;
			font-size: 1.1rem;
			font-weight: 700;
			letter-spacing: 0.04em;
			box-shadow: 0 10px 24px rgba(59, 179, 194, 0.22);
		}

		.year-divider {
			height: 1px;
			margin: 1rem 0 2rem;
			background: linear-gradient(90deg, rgba(59, 179, 194, 0.5) 0%, rgba(59, 179, 194, 0.08) 100%);
		}

		.content-card-grid + .content-card-grid {
			margin-top: 1.5rem;
		}

		.blog-entry .text .heading {
			min-height: 3.4em;
		}

		.blog-entry .text p {
			min-height: 4.8em;
		}
	</style>

	<div class="container">
		<?php if (empty($kontenByYear)) { ?>
		<div class="row">
			<div class="col-12">
				<div class="alert alert-info mb-0">Belum ada konten untuk kategori ini.</div>
			</div>
		</div>
		<?php } ?>

		<?php foreach ($kontenByYear as $year => $yearItems) { ?>
		<div class="year-section">
			<div class="year-badge"><?php echo $year; ?></div>
			<div class="year-divider"></div>

			<?php foreach (array_chunk($yearItems, 4) as $itemChunk) { ?>
			<div class="row content-card-grid">
				<?php foreach ($itemChunk as $brt) { ?>
				<div class="col-lg-3 col-md-6 ftco-animate">
					<div class="blog-entry">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/isi/<?php echo $brt->id_konten; ?>" class="block-20" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/upload/konten/<?php echo $brt->gambar; ?>');">
							<div class="meta-date text-center p-2">
								<span class="day"><?php echo Yii::app()->dateFormatter->format("dd", $brt->tgl_entry); ?></span>
								<span class="mos"><?php echo Yii::app()->dateFormatter->format("MMM", $brt->tgl_entry); ?></span>
								<span class="yr"><?php echo Yii::app()->dateFormatter->format("y", $brt->tgl_entry); ?></span>
							</div>
						</a>

						<div class="text bg-white p-4">
							<h3 class="heading"><a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/isi/<?php echo $brt->id_konten; ?>"><?php echo $brt->judul; ?></a></h3>
							<p><?php echo substr(strip_tags($brt->isi), 0, 80) . '...'; ?></p>
							<div class="d-flex align-items-center mt-4">
								<p class="mb-0"><a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/isi/<?php echo $brt->id_konten; ?>" class="btn btn-primary">Selengkapnya <span class="ion-ios-arrow-round-forward"></span></a></p>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
</section>
