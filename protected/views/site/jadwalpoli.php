<?php
$searchTerm = isset($q) ? trim($q) : '';
$baseUrl = Yii::app()->request->baseUrl;
?>

<style type="text/css">
	.jadwal-hero {
		position: relative;
		overflow: hidden;
	}

	.jadwal-hero::before {
		content: "";
		position: absolute;
		inset: 0;
		background: linear-gradient(135deg, rgba(10, 48, 71, 0.82) 0%, rgba(24, 93, 121, 0.68) 50%, rgba(47, 159, 177, 0.52) 100%);
	}

	.jadwal-hero .overlay {
		background: transparent;
	}

	.jadwal-shell {
		position: relative;
		z-index: 2;
		margin-top: -110px;
	}

	.jadwal-dashboard {
		background: #ffffff;
		border-radius: 30px;
		overflow: hidden;
		box-shadow: 0 26px 60px rgba(22, 50, 79, 0.16);
		border: 1px solid rgba(39, 116, 130, 0.12);
	}

	.jadwal-dashboard.search-active {
		box-shadow: 0 30px 64px rgba(39, 116, 130, 0.20);
		border-color: rgba(39, 116, 130, 0.22);
	}

	.jadwal-dashboard-head {
		padding: 34px;
		background:
			radial-gradient(circle at top right, rgba(59, 179, 194, 0.18), transparent 30%),
			linear-gradient(135deg, #f2fbfc 0%, #ffffff 55%, #edf6fb 100%);
		border-bottom: 1px solid rgba(39, 116, 130, 0.10);
	}

	.jadwal-head-top {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		gap: 18px;
		align-items: flex-start;
	}

	.jadwal-kicker {
		display: inline-flex;
		align-items: center;
		gap: 8px;
		padding: 8px 14px;
		border-radius: 999px;
		background: rgba(39, 116, 130, 0.10);
		color: #277482;
		font-size: 12px;
		font-weight: 700;
		letter-spacing: 0.06em;
		text-transform: uppercase;
		margin-bottom: 14px;
	}

	.jadwal-title {
		margin: 0 0 10px;
		font-size: 34px;
		line-height: 1.2;
		color: #16324f;
		font-weight: 700;
	}

	.jadwal-subtitle {
		margin: 0;
		max-width: 760px;
		color: #668099;
		font-size: 15px;
		line-height: 1.7;
	}

	.jadwal-stats {
		display: flex;
		flex-wrap: wrap;
		gap: 12px;
	}

	.jadwal-stat {
		min-width: 150px;
		padding: 14px 16px;
		border-radius: 20px;
		background: rgba(255, 255, 255, 0.88);
		border: 1px solid rgba(39, 116, 130, 0.10);
		box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.75);
	}

	.jadwal-stat-label {
		display: block;
		margin-bottom: 6px;
		font-size: 12px;
		font-weight: 700;
		letter-spacing: 0.05em;
		text-transform: uppercase;
		color: #7a90a3;
	}

	.jadwal-stat-value {
		display: block;
		color: #16324f;
		font-size: 22px;
		font-weight: 700;
	}

	.jadwal-search-wrap {
		margin-top: 24px;
		display: flex;
		flex-wrap: wrap;
		gap: 14px;
		align-items: stretch;
	}

	.jadwal-search-form {
		display: flex;
		flex: 1 1 720px;
		flex-wrap: wrap;
		gap: 12px;
		align-items: center;
		padding: 18px;
		border-radius: 24px;
		background: rgba(255, 255, 255, 0.92);
		border: 1px solid rgba(39, 116, 130, 0.12);
		box-shadow: 0 12px 24px rgba(22, 50, 79, 0.06);
	}

	.jadwal-search-label {
		margin: 0;
		min-width: 92px;
		font-weight: 600;
		color: #16324f;
	}

	.jadwal-search-input {
		flex: 1 1 320px;
		height: 50px;
		border-radius: 16px;
		border: 1px solid #d4e5eb;
		padding: 0 16px;
		box-shadow: none;
	}

	.jadwal-search-input:focus {
		border-color: #2f9fb1;
		box-shadow: 0 0 0 4px rgba(47, 159, 177, 0.12);
	}

	.jadwal-btn {
		height: 50px;
		padding: 0 22px;
		border-radius: 16px;
		border: 0;
		font-weight: 700;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		text-decoration: none;
		transition: all 0.2s ease;
	}

	.jadwal-btn-primary {
		background: linear-gradient(135deg, #2f9fb1 0%, #277482 100%);
		color: #ffffff;
	}

	.jadwal-btn-primary:hover,
	.jadwal-btn-primary:focus {
		color: #ffffff;
		transform: translateY(-1px);
		box-shadow: 0 12px 20px rgba(39, 116, 130, 0.18);
	}

	.jadwal-btn-secondary {
		background: #eef6f8;
		color: #2f6b76;
	}

	.jadwal-btn-secondary:hover,
	.jadwal-btn-secondary:focus {
		color: #245962;
		background: #e5f1f4;
	}

	.jadwal-tabs {
		padding: 18px 24px 0;
		display: flex;
		flex-wrap: wrap;
		gap: 10px;
	}

	.jadwal-tab-btn {
		border: 0;
		background: #edf5f8;
		color: #41637b;
		border-radius: 999px;
		padding: 12px 16px;
		font-weight: 700;
		font-size: 14px;
		display: inline-flex;
		align-items: center;
		gap: 10px;
		transition: all 0.2s ease;
	}

	.jadwal-tab-btn:hover {
		background: #e2eff3;
	}

	.jadwal-tab-btn.active {
		background: linear-gradient(135deg, #2f9fb1 0%, #277482 100%);
		color: #ffffff;
		box-shadow: 0 10px 20px rgba(39, 116, 130, 0.18);
	}

	.jadwal-tab-count {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		min-width: 28px;
		height: 28px;
		padding: 0 8px;
		border-radius: 999px;
		background: rgba(255, 255, 255, 0.32);
		font-size: 12px;
		font-weight: 700;
	}

	.jadwal-tab-btn:not(.active) .jadwal-tab-count {
		background: #ffffff;
		color: #277482;
	}

	.jadwal-tab-panels {
		padding: 22px 24px 28px;
	}

	.jadwal-tab-panel {
		display: none;
	}

	.jadwal-tab-panel.active {
		display: block;
	}

	.jadwal-empty-day {
		padding: 44px 26px;
		text-align: center;
		border: 1px dashed #d5e5eb;
		border-radius: 24px;
		background: linear-gradient(180deg, #fbfdfe 0%, #f6fafc 100%);
		color: #6b8398;
	}

	.jadwal-empty-day strong {
		display: block;
		margin-bottom: 8px;
		color: #16324f;
		font-size: 18px;
	}

	.jadwal-clinic-section + .jadwal-clinic-section {
		margin-top: 26px;
	}

	.jadwal-clinic-header {
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		justify-content: space-between;
		gap: 16px;
		margin-bottom: 16px;
	}

	.jadwal-clinic-title-wrap {
		display: flex;
		align-items: center;
		gap: 14px;
	}

	.jadwal-clinic-icon {
		width: 52px;
		height: 52px;
		border-radius: 18px;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		background: linear-gradient(135deg, #2f9fb1 0%, #277482 100%);
		color: #ffffff;
		font-size: 18px;
		box-shadow: 0 10px 18px rgba(39, 116, 130, 0.18);
	}

	.jadwal-clinic.theme-gigi .jadwal-clinic-icon { background: linear-gradient(135deg, #00a6a6 0%, #007991 100%); }
	.jadwal-clinic.theme-anak .jadwal-clinic-icon { background: linear-gradient(135deg, #ff9a62 0%, #ff7a59 100%); }
	.jadwal-clinic.theme-jantung .jadwal-clinic-icon { background: linear-gradient(135deg, #ff6b6b 0%, #d9485f 100%); }
	.jadwal-clinic.theme-mata .jadwal-clinic-icon { background: linear-gradient(135deg, #4f8cff 0%, #3557d6 100%); }
	.jadwal-clinic.theme-kandungan .jadwal-clinic-icon { background: linear-gradient(135deg, #ff7aa2 0%, #d65a8b 100%); }
	.jadwal-clinic.theme-bedah .jadwal-clinic-icon { background: linear-gradient(135deg, #7a7dff 0%, #5b4bd8 100%); }

	.jadwal-clinic-name {
		margin: 0;
		font-size: 24px;
		font-weight: 700;
		color: #16324f;
	}

	.jadwal-clinic-sub {
		display: flex;
		flex-wrap: wrap;
		gap: 10px;
		margin-top: 6px;
		color: #688197;
		font-size: 14px;
	}

	.jadwal-clinic-count {
		display: inline-flex;
		align-items: center;
		padding: 7px 12px;
		border-radius: 999px;
		background: #edf6f8;
		color: #277482;
		font-weight: 700;
	}

	.jadwal-grid {
		display: flex;
		flex-wrap: wrap;
		margin-left: -12px;
		margin-right: -12px;
	}

	.jadwal-grid-col {
		width: 50%;
		padding: 12px;
	}

	.jadwal-card {
		height: 100%;
		border-radius: 26px;
		background: linear-gradient(180deg, #ffffff 0%, #f9fcfd 100%);
		border: 1px solid #e3eef3;
		box-shadow: 0 16px 32px rgba(22, 50, 79, 0.08);
		padding: 24px;
		position: relative;
		overflow: hidden;
		animation: jadwalFadeUp 0.55s ease both;
		transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
	}

	.jadwal-card:hover {
		transform: translateY(-4px);
		box-shadow: 0 24px 40px rgba(22, 50, 79, 0.12);
		border-color: rgba(39, 116, 130, 0.20);
	}

	.jadwal-card::after {
		content: "";
		position: absolute;
		top: -60px;
		right: -60px;
		width: 160px;
		height: 160px;
		border-radius: 999px;
		background: rgba(47, 159, 177, 0.08);
	}

	.jadwal-card-head {
		position: relative;
		z-index: 2;
		display: flex;
		justify-content: space-between;
		gap: 16px;
		margin-bottom: 18px;
	}

	.jadwal-status {
		display: inline-flex;
		align-items: center;
		gap: 8px;
		padding: 9px 12px;
		border-radius: 999px;
		font-size: 12px;
		font-weight: 700;
		letter-spacing: 0.02em;
	}

	.jadwal-status.status-open {
		background: #eaf7f0;
		color: #1f7f50;
	}

	.jadwal-status.status-soon {
		background: #fff3e8;
		color: #b86a1d;
	}

	.jadwal-status.status-closed {
		background: #fdecec;
		color: #be4f60;
	}

	.jadwal-status.status-info {
		background: #edf6f8;
		color: #277482;
	}

	.jadwal-time-chip {
		display: inline-flex;
		align-items: center;
		gap: 8px;
		padding: 9px 12px;
		border-radius: 999px;
		background: #edf6f8;
		color: #277482;
		font-size: 12px;
		font-weight: 700;
	}

	.jadwal-card-body {
		position: relative;
		z-index: 2;
		display: flex;
		gap: 18px;
	}

	.jadwal-photo,
	.jadwal-photo-fallback {
		width: 92px;
		height: 92px;
		border-radius: 24px;
		flex-shrink: 0;
	}

	.jadwal-photo {
		object-fit: cover;
		border: 4px solid rgba(255, 255, 255, 0.92);
		box-shadow: 0 14px 26px rgba(22, 50, 79, 0.10);
		background: #ffffff;
	}

	.jadwal-photo-fallback {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		background: linear-gradient(135deg, #d9eef2 0%, #eef7fa 100%);
		color: #2f6b76;
		font-size: 30px;
		box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.8);
	}

	.jadwal-doctor-name {
		margin: 2px 0 12px;
		font-size: 22px;
		line-height: 1.35;
		font-weight: 700;
		color: #16324f;
	}

	.jadwal-meta-row {
		display: flex;
		flex-wrap: wrap;
		gap: 8px;
		margin-bottom: 12px;
	}

	.jadwal-pill {
		display: inline-flex;
		align-items: center;
		gap: 7px;
		padding: 8px 12px;
		border-radius: 999px;
		font-size: 12px;
		font-weight: 700;
	}

	.jadwal-pill.day {
		background: #eef4ff;
		color: #356ac3;
	}

	.jadwal-pill.time {
		background: #eaf7f0;
		color: #1f7f50;
	}

	.jadwal-pill .dot {
		width: 7px;
		height: 7px;
		border-radius: 999px;
		background: currentColor;
		flex-shrink: 0;
	}

	.jadwal-pill .oi {
		font-size: 11px;
		flex-shrink: 0;
	}

	.jadwal-badge-list {
		display: flex;
		flex-wrap: wrap;
		gap: 8px;
		margin-bottom: 12px;
	}

	.jadwal-service-badge {
		display: inline-flex;
		align-items: center;
		gap: 6px;
		padding: 6px 10px;
		border-radius: 999px;
		font-size: 12px;
		font-weight: 700;
	}

	.jadwal-service-badge.badge-bpjs {
		background: #e9f7ef;
		color: #1f7f50;
	}

	.jadwal-service-badge.badge-umum {
		background: #eef4ff;
		color: #356ac3;
	}

	.jadwal-service-badge.badge-asuransi {
		background: #f5ecff;
		color: #7b46b3;
	}

	.jadwal-service-badge.badge-appointment {
		background: #fff3e8;
		color: #b86a1d;
	}

	.jadwal-note {
		display: flex;
		align-items: flex-start;
		gap: 10px;
		padding: 12px 14px;
		border-radius: 16px;
		background: #fff9ef;
		color: #8a6b20;
		line-height: 1.6;
	}

	.jadwal-note-icon {
		width: 22px;
		height: 22px;
		border-radius: 999px;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		background: #ffd97a;
		color: #7c5a10;
		flex-shrink: 0;
		font-size: 12px;
		margin-top: 1px;
	}

	@keyframes jadwalFadeUp {
		from {
			opacity: 0;
			transform: translateY(24px);
		}

		to {
			opacity: 1;
			transform: translateY(0);
		}
	}

	@media (max-width: 991px) {
		.jadwal-shell {
			margin-top: -72px;
		}

		.jadwal-dashboard-head {
			padding: 24px 20px;
		}

		.jadwal-title {
			font-size: 28px;
		}

		.jadwal-tabs {
			padding: 16px 18px 0;
		}

		.jadwal-tab-panels {
			padding: 18px 18px 24px;
		}

		.jadwal-grid-col {
			width: 100%;
		}
	}

	@media (max-width: 575px) {
		.jadwal-shell {
			margin-top: -44px;
		}

		.jadwal-dashboard {
			border-radius: 22px;
		}

		.jadwal-dashboard-head {
			padding: 18px 16px;
		}

		.jadwal-kicker {
			padding: 7px 12px;
			font-size: 11px;
			margin-bottom: 10px;
		}

		.jadwal-title {
			font-size: 24px;
			margin-bottom: 8px;
		}

		.jadwal-subtitle {
			font-size: 14px;
			line-height: 1.6;
		}

		.jadwal-stat {
			min-width: 0;
			flex: 1 1 100%;
			padding: 12px 14px;
		}

		.jadwal-stat-value {
			font-size: 20px;
		}

		.jadwal-search-form {
			padding: 14px;
			gap: 10px;
			border-radius: 18px;
		}

		.jadwal-search-label,
		.jadwal-search-input,
		.jadwal-btn {
			width: 100%;
		}

		.jadwal-search-input,
		.jadwal-btn {
			height: 44px;
		}

		.jadwal-tabs {
			padding: 14px 14px 0;
			gap: 8px;
		}

		.jadwal-tab-btn {
			padding: 10px 12px;
			font-size: 13px;
			gap: 8px;
		}

		.jadwal-tab-count {
			min-width: 24px;
			height: 24px;
			font-size: 11px;
		}

		.jadwal-tab-panels {
			padding: 14px 14px 18px;
		}

		.jadwal-clinic-section + .jadwal-clinic-section {
			margin-top: 20px;
		}

		.jadwal-clinic-icon {
			width: 44px;
			height: 44px;
			border-radius: 15px;
			font-size: 16px;
		}

		.jadwal-clinic-name {
			font-size: 18px;
		}

		.jadwal-clinic-sub {
			font-size: 13px;
			gap: 8px;
		}

		.jadwal-card {
			padding: 16px;
			border-radius: 20px;
		}

		.jadwal-card-head {
			margin-bottom: 14px;
			flex-direction: column;
			align-items: flex-start;
		}

		.jadwal-card-body {
			gap: 14px;
		}

		.jadwal-photo,
		.jadwal-photo-fallback {
			width: 72px;
			height: 72px;
			border-radius: 18px;
		}

		.jadwal-photo-fallback {
			font-size: 22px;
		}

		.jadwal-doctor-name {
			font-size: 18px;
			margin-bottom: 10px;
		}

		.jadwal-meta-row,
		.jadwal-badge-list {
			gap: 6px;
			margin-bottom: 10px;
		}

		.jadwal-pill,
		.jadwal-service-badge {
			font-size: 11px;
			padding: 6px 9px;
		}

		.jadwal-note {
			padding: 10px 12px;
			font-size: 13px;
			gap: 8px;
			border-radius: 14px;
		}

		.jadwal-note-icon {
			width: 18px;
			height: 18px;
			font-size: 10px;
		}
	}
</style>

<section class="hero-wrap hero-wrap-2 jadwal-hero" style="background-image: url('<?php echo $baseUrl; ?>/images/main/poli.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-10 ftco-animate text-center">
				<p class="breadcrumbs mb-2">
					<span class="mr-2"><a href="<?php echo $baseUrl; ?>/">Beranda</a></span>
					<span>Jadwal Poliklinik</span>
				</p>
				<h1 class="mb-2 bread">Dashboard Jadwal Poliklinik</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
	<div class="container jadwal-shell">
		<div class="jadwal-dashboard<?php echo $searchTerm !== '' ? ' search-active' : ''; ?>">
			<div class="jadwal-dashboard-head">
				<div class="jadwal-head-top">
					<div>
						<div class="jadwal-kicker"><span class="oi oi-calendar"></span> Layanan Rawat Jalan</div>
						<h2 class="jadwal-title">Informasi Praktik Dokter per Hari</h2>
						<p class="jadwal-subtitle">Pilih hari pelayanan untuk melihat daftar dokter, status praktik, jam layanan, dan informasi poli dengan format dashboard yang lebih cepat dipindai.</p>
					</div>
					<div class="jadwal-stats">
						<div class="jadwal-stat">
							<span class="jadwal-stat-label">Klinik Tampil</span>
							<span class="jadwal-stat-value"><?php echo (int) $totalClinics; ?></span>
						</div>
						<div class="jadwal-stat">
							<span class="jadwal-stat-label">Slot Jadwal</span>
							<span class="jadwal-stat-value"><?php echo (int) $totalSchedules; ?></span>
						</div>
					</div>
				</div>

				<div class="jadwal-search-wrap">
					<form method="get" action="<?php echo $baseUrl; ?>/site/jadwalpoli" class="jadwal-search-form">
						<label for="q" class="jadwal-search-label">Cari jadwal</label>
						<input
							id="q"
							name="q"
							value="<?php echo CHtml::encode($searchTerm); ?>"
							class="form-control jadwal-search-input"
							placeholder="Cari berdasarkan poli, dokter, hari, jam, atau keterangan..."
						/>
						<button type="submit" class="jadwal-btn jadwal-btn-primary">Cari</button>
						<?php if ($searchTerm !== ''): ?>
							<a href="<?php echo $baseUrl; ?>/site/jadwalpoli" class="jadwal-btn jadwal-btn-secondary">Reset</a>
						<?php endif; ?>
					</form>
				</div>
			</div>

			<div class="jadwal-tabs" role="tablist" aria-label="Pilih hari jadwal">
				<?php foreach ($hariTabs as $hari): ?>
					<?php $countHari = 0; ?>
					<?php foreach ($groupedSchedulesByDay[$hari] as $group): ?>
						<?php $countHari += $group['count']; ?>
					<?php endforeach; ?>
					<button
						type="button"
						class="jadwal-tab-btn<?php echo $hari === $activeHari ? ' active' : ''; ?>"
						data-tab-target="<?php echo CHtml::encode($hari); ?>"
					>
						<span><?php echo CHtml::encode($hari); ?></span>
						<span class="jadwal-tab-count"><?php echo $countHari; ?></span>
					</button>
				<?php endforeach; ?>
			</div>

			<div class="jadwal-tab-panels">
				<?php foreach ($hariTabs as $hari): ?>
					<div class="jadwal-tab-panel<?php echo $hari === $activeHari ? ' active' : ''; ?>" data-tab-panel="<?php echo CHtml::encode($hari); ?>">
						<?php if (empty($groupedSchedulesByDay[$hari])): ?>
							<div class="jadwal-empty-day">
								<strong>Tidak ada jadwal untuk hari <?php echo CHtml::encode($hari); ?></strong>
								Silakan pilih hari lain atau gunakan pencarian untuk melihat hasil yang tersedia.
							</div>
						<?php else: ?>
							<?php foreach ($groupedSchedulesByDay[$hari] as $clinicIndex => $clinicGroup): ?>
								<div class="jadwal-clinic-section jadwal-clinic <?php echo CHtml::encode($clinicGroup['themeClass']); ?>">
									<div class="jadwal-clinic-header">
										<div class="jadwal-clinic-title-wrap">
											<span class="jadwal-clinic-icon"><span class="oi oi-medical-cross"></span></span>
											<div>
												<h3 class="jadwal-clinic-name"><?php echo CHtml::encode($clinicGroup['clinic_name']); ?></h3>
												<div class="jadwal-clinic-sub">
													<span class="jadwal-clinic-count"><?php echo (int) $clinicGroup['count']; ?> jadwal</span>
													<span>Pelayanan hari <?php echo CHtml::encode($hari); ?></span>
												</div>
											</div>
										</div>
									</div>

									<div class="jadwal-grid">
										<?php foreach ($clinicGroup['rows'] as $rowIndex => $row): ?>
											<?php
											$photoPath = Yii::getPathOfAlias('webroot') . '/images/dokter/foto/' . $row['foto'];
											$photoUrl = $row['foto'] !== '' && is_file($photoPath)
												? $baseUrl . '/images/dokter/foto/' . rawurlencode($row['foto'])
												: '';
											?>
											<div class="jadwal-grid-col">
												<div class="jadwal-card" style="animation-delay: <?php echo (($clinicIndex * 0.08) + ($rowIndex * 0.06)); ?>s;">
													<div class="jadwal-card-head">
														<div class="jadwal-status <?php echo CHtml::encode($row['status']['class']); ?>">
															<span class="<?php echo CHtml::encode($row['status']['icon']); ?>"></span>
															<span><?php echo CHtml::encode($row['status']['text']); ?></span>
														</div>
														<div class="jadwal-time-chip">
															<span class="oi oi-clock"></span>
															<span>Jam Praktik : <?php echo CHtml::encode($row['jam']); ?></span>
														</div>
													</div>

													<div class="jadwal-card-body">
														<?php if ($photoUrl !== ''): ?>
															<img src="<?php echo $photoUrl; ?>" alt="<?php echo CHtml::encode($row['dokter']); ?>" class="jadwal-photo" />
														<?php else: ?>
															<div class="jadwal-photo-fallback"><span class="oi oi-person"></span></div>
														<?php endif; ?>

														<div class="jadwal-card-main">
															<h4 class="jadwal-doctor-name"><?php echo CHtml::encode($row['dokter']); ?></h4>

															<div class="jadwal-meta-row">
																<span class="jadwal-pill day">
																	<span class="oi oi-calendar"></span>
																	<span>Hari Praktik : <?php echo CHtml::encode($row['hari_display']); ?></span>
																</span>
															</div>

															<?php if (!empty($row['keteranganBadges'])): ?>
																<div class="jadwal-badge-list">
																	<?php foreach ($row['keteranganBadges'] as $badge): ?>
																		<span class="jadwal-service-badge <?php echo CHtml::encode($badge['class']); ?>">
																			<span class="<?php echo CHtml::encode($badge['icon']); ?>"></span>
																			<span><?php echo CHtml::encode($badge['label']); ?></span>
																		</span>
																	<?php endforeach; ?>
																</div>
															<?php endif; ?>

															<?php if ($row['keterangan_detail'] !== ''): ?>
																<div class="jadwal-note">
																	<span class="jadwal-note-icon">i</span>
																	<span><?php echo CHtml::encode($row['keterangan_detail']); ?></span>
																</div>
															<?php elseif (empty($row['keteranganBadges'])): ?>
																<div class="jadwal-note">
																	<span class="jadwal-note-icon">i</span>
																	<span>Tidak ada keterangan tambahan untuk jadwal ini.</span>
																</div>
															<?php endif; ?>
														</div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	(function () {
		var tabButtons = document.querySelectorAll('[data-tab-target]');
		var tabPanels = document.querySelectorAll('[data-tab-panel]');

		for (var i = 0; i < tabButtons.length; i++) {
			tabButtons[i].addEventListener('click', function () {
				var target = this.getAttribute('data-tab-target');

				for (var j = 0; j < tabButtons.length; j++) {
					tabButtons[j].classList.remove('active');
				}

				for (var k = 0; k < tabPanels.length; k++) {
					tabPanels[k].classList.remove('active');
				}

				this.classList.add('active');

				for (var p = 0; p < tabPanels.length; p++) {
					if (tabPanels[p].getAttribute('data-tab-panel') === target) {
						tabPanels[p].classList.add('active');
					}
				}
			});
		}
	})();
</script>
