<style type="text/css">

  marquee {

    background: #3bb3c2;

    line-height: 3rem;

    font-size: .9em;

    font-weight: 500;

    color: #fff;

    margin-bottom: 0;

  }



  @media only screen and (max-width: 768px) {

  .owl-carousel.home-slider {

    height: 200px;

    width: 100%;

  }



  .owl-carousel.home-slider .slider-item {

    height: 200px;

    width: 100%;

  }

}

.service-link {
  transition: all 0.3s ease;
  cursor: pointer;
}

.service-link:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* Custom CSS untuk 5 kolom sejajar */
.five-columns .col-md-2-4 {
  flex: 0 0 20%;
  max-width: 20%;
}

@media (max-width: 991.98px) {
  .five-columns .col-md-2-4 {
    flex: 0 0 50%;
    max-width: 50%;
  }
}

@media (max-width: 767.98px) {
  .five-columns .col-md-2-4 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}

</style>

<?php
$contentSections = isset($homepageContent) && is_array($homepageContent) ? $homepageContent : array();
$beritaItems = isset($contentSections['berita']) ? $contentSections['berita'] : array();
$pengumumanItems = isset($contentSections['pengumuman']) ? $contentSections['pengumuman'] : array();
$artikelItems = isset($contentSections['artikel']) ? $contentSections['artikel'] : array();
?>

<!-- <div class="ticker-wrap">

<div class="ticker">

        <div class="ticker__item ticker-logo">

            .:.

        </div>

  <div class="ticker__item">Selamat Datang di Website Rumah Sakit Pelita Insani Martapura</div>



        <div class="ticker__item ticker-logo">

           .:.

        </div>

  <div class="ticker__item">Rumah Sakit yang memberikan pelayanan kesehatan berkualitas, profesional, dan ramah kepada pasien serta keluarga dengan rasionalitas dalam pembiayaan.</div>



        <div class="ticker__item ticker-logo">

           .:.

        </div>

</div>

</div> -->

<marquee> Selamat Datang di Website Rumah Sakit Pelita Insani Martapura | Rumah Sakit yang memberikan pelayanan kesehatan berkualitas, profesional, dan ramah kepada pasien serta keluarga dengan rasionalitas dalam pembiayaan.</marquee>



    <section class="home-slider owl-carousel">

      <?php 

        $slider = Slider::model()->findAll();

        foreach ($slider as $s) {

      ?>

      <div class="slider-item" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/slider/<?php echo $s->gambar;?>);" data-stellar-background-ratio="0.5">

        <div class="overlay"></div>

      </div>

    <?php } ?>

     <!--  <div class="slider-item" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/main/main1.jpg);" data-stellar-background-ratio="0.5">

      	<div class="overlay"></div>

      </div>     -->

    </section>

<!-- <section class="hero-wrap" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/main/main1.jpg');height: 500px;" data-stellar-background-ratio="0.5">

</section> -->



    <section class="ftco-services ftco-no-pb">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-sm-6 col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-doctor"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Dokter Berkualitas</h3>
                <p>Rumah Sakit Pelita Insani didukung oleh Para Dokter Spesialis dari berbagai disiplin ilmu kedokteran yang sudah berpengalaman dan berkompeten di bidangnya.</p>
              </div>
            </div>      
          </div>
          <div class="col-sm-6 col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center" style="width: 100%">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-ambulance"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">3 Layanan Unggulan</h3>
                <p>Dari berbagai pelayanan yang ada, Rumah Sakit Pelita Insani dalam 5 tahun ke depan mempunyai 3 layanan unggulan, yaitu Pelayanan Kebidanan, Pelayanan Mata, dan Pelayanan Hemodialisa.</p>
              </div>
            </div>    
          </div>
          <div class="col-sm-6 col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-stethoscope"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Peralatan Canggih</h3>
                <p>Pelayanan Rumah Sakit Pelita Insani didukung dengan tenaga ahli yang berpengalaman dan peralatan yang canggih dan modern.</p>
              </div>
            </div>      
          </div>
          <div class="col-sm-6 col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-24-hours"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Pelayanan 24 jam</h3>
                <p>Untuk memenuhi kebutuhan masyarakat atas pelayanan mendesak, Rumah Sakit Pelita Insani menyediakan Layanan 24 Jam, yaitu Unit Gawat Darurat (UGD), Laboratorium, Farmasi, dan Radiologi</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="home-insight-divider" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/main/poli.jpg');">
      <div class="home-insight-divider-overlay"></div>
      <div class="home-insight-divider-line"></div>
    </section>

    <section class="ftco-section" style="padding-top: 4em; padding-bottom: 4em; background: linear-gradient(180deg, #f6fbfc 0%, #ffffff 100%);">
      <style type="text/css">
        .home-insight-divider {
          position: relative;
          min-height: 210px;
          background-size: cover;
          background-position: center;
          overflow: hidden;
        }

        .home-insight-divider-overlay {
          position: absolute;
          inset: 0;
          background: linear-gradient(135deg, rgba(24, 111, 124, 0.76) 0%, rgba(59, 179, 194, 0.62) 100%);
        }

        .home-insight-divider-line {
          position: absolute;
          left: 0;
          right: 0;
          top: 0;
          height: 5px;
          background: linear-gradient(90deg, #2f9fb1 0%, #1f7887 50%, #5ec8d0 100%);
        }

        .home-insight-wrap {
          position: relative;
          width: calc(100% - 18px);
          max-width: 1680px;
          margin: 0 auto;
        }

        .home-insight-shell {
          position: relative;
          padding: 44px 34px;
          border-radius: 32px;
          background:
            radial-gradient(circle at top right, rgba(59, 179, 194, 0.16), transparent 28%),
            linear-gradient(135deg, #ffffff 0%, #f8fcfd 100%);
          border: 1px solid rgba(59, 179, 194, 0.12);
          box-shadow: 0 26px 50px rgba(15, 76, 92, 0.10);
          overflow: hidden;
        }

        .home-insight-shell:before {
          content: "";
          position: absolute;
          inset: auto auto -120px -80px;
          width: 260px;
          height: 260px;
          border-radius: 50%;
          background: rgba(59, 179, 194, 0.08);
        }

        .home-insight-head {
          position: relative;
          z-index: 2;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          align-items: flex-end;
          gap: 18px;
          margin-bottom: 30px;
        }

        .home-insight-kicker {
          display: inline-block;
          padding: 8px 14px;
          border-radius: 999px;
          background: rgba(59, 179, 194, 0.12);
          color: #1a7f8e;
          font-size: 12px;
          font-weight: 700;
          letter-spacing: .08em;
          text-transform: uppercase;
          margin-bottom: 14px;
        }

        .home-insight-title {
          margin: 0 0 10px;
          color: #17344d;
          font-size: 34px;
          line-height: 1.2;
          font-weight: 700;
        }

        .home-insight-subtitle {
          margin: 0;
          max-width: 680px;
          color: #6c8499;
          line-height: 1.8;
        }

        .home-insight-action {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          padding: 13px 18px;
          border-radius: 999px;
          background: #17344d;
          color: #ffffff;
          font-weight: 600;
          text-decoration: none;
          transition: all .25s ease;
        }

        .home-insight-action:hover,
        .home-insight-action:focus {
          color: #ffffff;
          transform: translateY(-2px);
          box-shadow: 0 14px 22px rgba(23, 52, 77, 0.18);
        }

        .home-insight-grid {
          position: relative;
          z-index: 2;
          display: flex;
          flex-wrap: wrap;
          align-items: flex-start;
          margin-left: -12px;
          margin-right: -12px;
        }

        .home-insight-main,
        .home-insight-side {
          padding: 12px;
        }

        .home-insight-main {
          width: 72%;
        }

        .home-insight-side {
          width: 28%;
        }

        .home-content-panel {
          padding: 24px;
          border-radius: 26px;
          background: rgba(255,255,255,0.92);
          border: 1px solid rgba(59, 179, 194, 0.12);
          box-shadow: 0 18px 34px rgba(23, 52, 77, 0.08);
        }

        .home-content-panel + .home-content-panel {
          margin-top: 24px;
        }

        .home-panel-head {
          display: flex;
          align-items: center;
          justify-content: space-between;
          gap: 14px;
          margin-bottom: 18px;
        }

        .home-panel-label {
          display: inline-flex;
          align-items: center;
          gap: 10px;
          margin-bottom: 10px;
        }

        .home-panel-icon {
          width: 42px;
          height: 42px;
          border-radius: 14px;
          display: inline-flex;
          align-items: center;
          justify-content: center;
          color: #ffffff;
          font-size: 16px;
          box-shadow: 0 12px 22px rgba(23, 52, 77, 0.14);
        }

        .home-panel-icon.berita { background: linear-gradient(135deg, #2f9fb1 0%, #277482 100%); }
        .home-panel-icon.artikel { background: linear-gradient(135deg, #ff9d6c 0%, #ff7a59 100%); }
        .home-panel-icon.pengumuman { background: linear-gradient(135deg, #7f8bff 0%, #5f67d8 100%); }

        .home-panel-kicker {
          display: block;
          color: #7c91a4;
          font-size: 12px;
          font-weight: 700;
          text-transform: uppercase;
          letter-spacing: .08em;
        }

        .home-panel-title {
          margin: 2px 0 0;
          color: #17344d;
          font-size: 24px;
          font-weight: 700;
        }

        .home-panel-link {
          color: #2b8190;
          font-weight: 600;
          text-decoration: none;
        }

        .home-panel-link:hover,
        .home-panel-link:focus {
          color: #1d6b79;
        }

        .home-feature-grid {
          display: flex;
          flex-wrap: wrap;
          margin-left: -10px;
          margin-right: -10px;
        }

        .home-feature-col {
          width: 50%;
          padding: 10px;
        }

        .home-story-card {
          display: block;
          height: 100%;
          border-radius: 22px;
          overflow: hidden;
          text-decoration: none;
          background: #ffffff;
          border: 1px solid rgba(59, 179, 194, 0.12);
          box-shadow: 0 16px 30px rgba(23, 52, 77, 0.07);
          transition: all .25s ease;
        }

        .home-story-card:hover,
        .home-story-card:focus {
          text-decoration: none;
          transform: translateY(-4px);
          box-shadow: 0 22px 36px rgba(23, 52, 77, 0.12);
        }

        .home-story-media {
          height: 188px;
          background-size: cover;
          background-position: center;
          position: relative;
        }

        .home-story-media:after {
          content: "";
          position: absolute;
          inset: 0;
          background: linear-gradient(180deg, rgba(10, 39, 56, 0.06) 0%, rgba(10, 39, 56, 0.18) 100%);
        }

        .home-story-body {
          padding: 18px 18px 20px;
        }

        .home-story-date {
          display: inline-flex;
          align-items: center;
          gap: 7px;
          margin-bottom: 12px;
          color: #6d8798;
          font-size: 12px;
          font-weight: 600;
        }

        .home-story-title {
          margin: 0 0 10px;
          color: #17344d;
          font-size: 19px;
          line-height: 1.45;
          font-weight: 700;
        }

        .home-story-excerpt {
          margin: 0;
          color: #71879a;
          line-height: 1.75;
          font-size: 14px;
        }

        .home-story-empty {
          padding: 28px 22px;
          border-radius: 20px;
          background: #f7fbfc;
          border: 1px dashed rgba(59, 179, 194, 0.24);
          color: #6f889a;
          line-height: 1.7;
        }

        .home-announcement-list {
          display: flex;
          flex-direction: column;
          gap: 14px;
        }

        .home-announcement-item {
          display: block;
          padding: 18px 18px 16px;
          border-radius: 20px;
          background: linear-gradient(135deg, #ffffff 0%, #f7fbfd 100%);
          border: 1px solid rgba(95, 103, 216, 0.12);
          box-shadow: 0 14px 24px rgba(95, 103, 216, 0.08);
          text-decoration: none;
          transition: all .25s ease;
        }

        .home-announcement-item:hover,
        .home-announcement-item:focus {
          text-decoration: none;
          transform: translateY(-3px);
          box-shadow: 0 18px 30px rgba(95, 103, 216, 0.12);
        }

        .home-announcement-tag {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          margin-bottom: 10px;
          padding: 6px 10px;
          border-radius: 999px;
          background: rgba(95, 103, 216, 0.10);
          color: #5660c9;
          font-size: 12px;
          font-weight: 700;
        }

        .home-announcement-title {
          margin: 0 0 10px;
          color: #17344d;
          font-size: 17px;
          line-height: 1.5;
          font-weight: 700;
        }

        .home-announcement-date {
          color: #73879a;
          font-size: 13px;
          font-weight: 600;
        }

        @media (max-width: 991.98px) {
          .home-insight-divider {
            min-height: 150px;
          }

          .home-insight-wrap {
            width: calc(100% - 16px);
          }

          .home-insight-shell {
            padding: 28px 20px;
            border-radius: 24px;
          }

          .home-insight-main,
          .home-insight-side,
          .home-feature-col {
            width: 100%;
          }

          .home-insight-title {
            font-size: 28px;
          }
        }

        @media (max-width: 575.98px) {
          .home-insight-divider {
            min-height: 110px;
          }

          .home-insight-wrap {
            width: calc(100% - 10px);
          }

          .home-insight-shell {
            padding: 22px 16px;
          }

          .home-content-panel {
            padding: 18px;
            border-radius: 20px;
          }

          .home-panel-title {
            font-size: 21px;
          }

          .home-story-media {
            height: 160px;
          }

          .home-story-title {
            font-size: 17px;
          }
        }
      </style>

      <div class="home-insight-wrap">
        <div class="home-insight-shell">
          <div class="home-insight-head">
            <div>
              <span class="home-insight-kicker">Info & Publikasi</span>
              <h2 class="home-insight-title">Berita, Artikel, dan Pengumuman Terbaru</h2>
              <p class="home-insight-subtitle">Kami tampilkan informasi terbaru Rumah Sakit Pelita Insani dalam format yang lebih cepat dipindai, sehingga pengunjung bisa langsung menemukan berita penting, artikel edukasi, dan pengumuman layanan.</p>
            </div>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/list/1" class="home-insight-action">
              Lihat Semua Konten
              <span class="ion-ios-arrow-round-forward"></span>
            </a>
          </div>

          <div class="home-insight-grid">
            <div class="home-insight-main">
              <div class="home-content-panel">
                <div class="home-panel-head">
                  <div>
                    <div class="home-panel-label">
                      <span class="home-panel-icon berita"><span class="icon-newspaper-o"></span></span>
                      <div>
                        <span class="home-panel-kicker">Update Rumah Sakit</span>
                        <h3 class="home-panel-title">Berita</h3>
                      </div>
                    </div>
                  </div>
                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/list/1" class="home-panel-link">Lihat semua</a>
                </div>

                <div class="home-feature-grid">
                  <?php if (empty($beritaItems)): ?>
                    <div class="home-feature-col">
                      <div class="home-story-empty">Belum ada berita yang dipublikasikan.</div>
                    </div>
                  <?php else: ?>
                    <?php foreach ($beritaItems as $item): ?>
                      <?php
                        $imageUrl = $item->gambar !== ''
                          ? Yii::app()->request->baseUrl . '/upload/konten/' . $item->gambar
                          : Yii::app()->request->baseUrl . '/images/logo-xs.png';
                        $excerpt = trim(strip_tags($item->isi));
                        if (function_exists('mb_substr')) {
                          $excerpt = mb_substr($excerpt, 0, 120, 'UTF-8');
                        } else {
                          $excerpt = substr($excerpt, 0, 120);
                        }
                        $excerpt = rtrim($excerpt, " .,") . '...';
                      ?>
                      <div class="home-feature-col">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/isi/<?php echo $item->id_konten; ?>" class="home-story-card">
                          <div class="home-story-media" style="background-image: url('<?php echo $imageUrl; ?>');"></div>
                          <div class="home-story-body">
                            <span class="home-story-date">
                              <span class="icon-calendar"></span>
                              <?php echo Yii::app()->dateFormatter->format("dd MMM yyyy", $item->tgl_entry); ?>
                            </span>
                            <h4 class="home-story-title"><?php echo CHtml::encode($item->judul); ?></h4>
                            <p class="home-story-excerpt"><?php echo CHtml::encode($excerpt); ?></p>
                          </div>
                        </a>
                      </div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>

              <div class="home-content-panel">
                <div class="home-panel-head">
                  <div class="home-panel-label">
                    <span class="home-panel-icon artikel"><span class="icon-lightbulb-o"></span></span>
                    <div>
                      <span class="home-panel-kicker">Edukasi Kesehatan</span>
                      <h3 class="home-panel-title">Artikel</h3>
                    </div>
                  </div>
                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/list/3" class="home-panel-link">Lihat semua</a>
                </div>

                <div class="home-feature-grid">
                  <?php if (empty($artikelItems)): ?>
                    <div class="home-feature-col">
                      <div class="home-story-empty">Belum ada artikel yang dipublikasikan.</div>
                    </div>
                  <?php else: ?>
                    <?php foreach ($artikelItems as $item): ?>
                      <?php
                        $imageUrl = $item->gambar !== ''
                          ? Yii::app()->request->baseUrl . '/upload/konten/' . $item->gambar
                          : Yii::app()->request->baseUrl . '/images/logo-xs.png';
                        $excerpt = trim(strip_tags($item->isi));
                        if (function_exists('mb_substr')) {
                          $excerpt = mb_substr($excerpt, 0, 120, 'UTF-8');
                        } else {
                          $excerpt = substr($excerpt, 0, 120);
                        }
                        $excerpt = rtrim($excerpt, " .,") . '...';
                      ?>
                      <div class="home-feature-col">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/isi/<?php echo $item->id_konten; ?>" class="home-story-card">
                          <div class="home-story-media" style="background-image: url('<?php echo $imageUrl; ?>');"></div>
                          <div class="home-story-body">
                            <span class="home-story-date">
                              <span class="icon-calendar"></span>
                              <?php echo Yii::app()->dateFormatter->format("dd MMM yyyy", $item->tgl_entry); ?>
                            </span>
                            <h4 class="home-story-title"><?php echo CHtml::encode($item->judul); ?></h4>
                            <p class="home-story-excerpt"><?php echo CHtml::encode($excerpt); ?></p>
                          </div>
                        </a>
                      </div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>

            <div class="home-insight-side">
              <div class="home-content-panel">
                <div class="home-panel-head">
                  <div class="home-panel-label">
                    <span class="home-panel-icon pengumuman"><span class="icon-bullhorn"></span></span>
                    <div>
                      <span class="home-panel-kicker">Informasi Penting</span>
                      <h3 class="home-panel-title">Pengumuman</h3>
                    </div>
                  </div>
                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/list/2" class="home-panel-link">Lihat semua</a>
                </div>

                <div class="home-announcement-list">
                  <?php if (empty($pengumumanItems)): ?>
                    <div class="home-story-empty">Belum ada pengumuman terbaru saat ini.</div>
                  <?php else: ?>
                    <?php foreach ($pengumumanItems as $item): ?>
                      <a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/isi/<?php echo $item->id_konten; ?>" class="home-announcement-item">
                        <span class="home-announcement-tag">
                          <span class="icon-megaphone"></span>
                          Pengumuman
                        </span>
                        <h4 class="home-announcement-title"><?php echo CHtml::encode($item->judul); ?></h4>
                        <div class="home-announcement-date">
                          <span class="icon-calendar"></span>
                          <?php echo Yii::app()->dateFormatter->format("dd MMM yyyy", $item->tgl_entry); ?>
                        </div>
                      </a>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		

    <footer class="ftco-footer ftco-bg-dark ftco-section" style="padding-top: 3em !important">

      <div class="container">

        <div class="row">

          <div class="col-md">

            <div class="ftco-footer-widget mb-5">

              <h2 class="ftco-heading-2 logo" style="margin-bottom: 0">PELITA<span>INSANI</span></h2>

              <p>mempunyai visi untuk menjadi rumah sakit yang memberikan pelayanan kesehatan berkualitas, profesional, dan ramah kepada pasien serta keluarga dengan rasionalitas dalam pembiayaan</p>

            </div>

            <div class="ftco-footer-widget mb-5">

            	<h2 class="ftco-heading-2"><span class="ion-ios-time mr-3"></span>Buka 24/7</h2>

            </div>

          </div>

          <div class="col-md">

            <div class="ftco-footer-widget mb-5">

              <h2 class="ftco-heading-2" style="margin-bottom: 0">Akses Cepat</h2>

              <div class="block-21 mb-2 d-flex">
                <div class="text" style="width: 100%">
                  <h3 class="heading"><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/jadwalpoli">Jadwal Poliklinik</a></h3>
                  <div class="meta">
                    <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/jadwalpoli"><span class="icon-arrow-right"></span> Lihat jadwal praktik dokter</a></div>
                  </div>
                </div>
              </div>

              <div class="block-21 mb-2 d-flex">
                <div class="text" style="width: 100%">
                  <h3 class="heading"><a href="https://poli.rspelitainsani.com/" target="_blank">Informasi Antrian Poli</a></h3>
                  <div class="meta">
                    <div><a href="https://poli.rspelitainsani.com/" target="_blank"><span class="icon-arrow-right"></span> Cek antrian poli secara real-time</a></div>
                  </div>
                </div>
              </div>

              <div class="block-21 mb-2 d-flex">
                <div class="text" style="width: 100%">
                  <h3 class="heading"><a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/list/2">Pengumuman Rumah Sakit</a></h3>
                  <div class="meta">
                    <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/list/2"><span class="icon-arrow-right"></span> Lihat pengumuman terbaru</a></div>
                  </div>
                </div>
              </div>

            </div>

          </div>

          <div class="col-md">

            <div class="ftco-footer-widget mb-5 ml-md-4">

              <h2 class="ftco-heading-2" style="margin-bottom: 0">Fasilitas</h2>

              <ul class="list-unstyled">

                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/fasilitas/medis"><span class="ion-ios-arrow-round-forward mr-2"></span>Medis</a></li>

                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/fasilitas/penunjang"><span class="ion-ios-arrow-round-forward mr-2"></span>Penunjang</a></li>

                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/fasilitas/ranap"><span class="ion-ios-arrow-round-forward mr-2"></span>Rawat Inap</a></li>

              </ul>

            </div>

          </div>

          <div class="col-md">

            <div class="ftco-footer-widget mb-5">

            	<h2 class="ftco-heading-2" style="margin-bottom: 0">Kontak Kami</h2>

            	<div class="block-23 mb-3">

	              <ul>

	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Sekumpul No. 66 Martapura 70614</span></li>

	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(0511) 4722210, 4722220</span></a></li>

	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">rs.pelitainsani@gmail.com</span></a></li>

	              </ul>

	            </div>



	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">

                <li class="ftco-animate">
                  <a href="https://youtube.com/@rs.pelitainsani3361?si=Tp9545KsuvEwoWM9" target="_blank">
                  <span class="icon-youtube"></span></a>
                </li>

                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>

                <li class="ftco-animate">
                  <a href="https://www.instagram.com/rspelitainsani?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                    <span class="icon-instagram"></span>
                  </a>
                </li>

                <li class="ftco-animate"><a href="https://wa.me/628115800059" target="_blank">
                  <span class="icon-whatsapp"></span></a>
                </li>

              </ul>

          </div>

          </div>

        </div>

      </div>

    </footer>



    <?php Yii::app()->clientScript->registerCoreScript("jquery");?>

    <script type="text/javascript">

    	$(function() {

    		$("a#v-pills-1-tab").addClass("active");

    		$("div#v-pills-1").addClass("py-2 show active");

    	});

    </script>
