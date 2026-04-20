<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/main/kontak1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Klaim</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">

          <div class="col-md-12 mb-4">
            <h2 class="h4">LINK Klaim</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-12 d-flex align-items-stretch">
            <div class=" bg-light d-flex align-self-stretch box p-4">
              <p class="mb-0 ">
              <?php
                $doktersp = Klaim::model()->findAllBySql('SELECT * FROM `t_utils` WHERE `id` IS NOT NULL');
                foreach ($doktersp as $drsp) {?>
                  <a href="<?= $drsp->url ?>" target="_blank" class="text bg-white btn btn-primary"><?= $drsp->field ?></a><br><br>
                <?php }
              ?>
              </p>
	          </div>
					</div>
        </div>
      </div>
    </section>
    <script>

    </script>