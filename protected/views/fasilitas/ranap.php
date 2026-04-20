<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/main/ranap.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Ruang Inap</h1>
          </div>
        </div>
      </div>
    </section>
<style type="text/css">
  .staff .text h4 {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 0;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
</style>

<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-8 d-flex align-items-stretch">
            <div class="row" style="width: 100%">
          <?php 
            $fasilitas = Fasilitas::model()->findAllByAttributes(array('kategori'=>3));
            foreach ($fasilitas as $fas) {
          ?> 
          <div class="col-md-8 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/fasilitas/<?php echo $fas->gambar; ?>);"></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="staff">
              <div class="text pt-3">
                <h4><?php echo $fas->nama; ?></h4>
                <?php echo $fas->deskripsi; ?>
              </div>
            </div>
            </div>
        <?php } ?>
         
        </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <!--<ul style="padding-inline-start: 0;width: 100%;">
                <?php
                  $inap = Ruanginap::model()->findAll();
                  foreach ($inap as $i) {
                ?>
                <li style="list-style: none;"><?php echo $i->nama_ruang." <span style='float:right'>(Rp ".number_format($i->harga,0,",",".")."/hari)</span>"; ?></li>
              <?php } ?>
              </ul>-->


            </div>
          </div>
        </div>
      </div>
    </section>