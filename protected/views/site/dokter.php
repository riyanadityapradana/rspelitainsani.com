<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/dokter/dokter1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Dokter</h1>
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
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <?php 
            $doktersp = Dokter::model()->findAllBySql('SELECT * FROM `t_dokter` WHERE `id_spesialis` IS NOT NULL');
            foreach ($doktersp as $drsp) {
          ?>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/dokter/<?php if($drsp->foto==null) { echo 'dok-anon.png'; } else { echo "foto/".$drsp->foto; } ?>');"></div>
              </div>
              <div class="text pt-3 text-center">
                <h4><?php echo $drsp->nama_dokter; ?></h4>
                <span class="position mb-2">
                  <?php $sp = Spesialis::model()->findByAttributes(array('kd_spesialis'=>$drsp->id_spesialis));
                      
                    if ($drsp->id_spesialis == null) {
                      echo "Dokter Umum";
                    } else { 
                      echo $sp->nama_spesialis;
                    }
                  ?></span>
              </div>
            </div>
          </div>
        <?php } ?>
         
          <?php 
            $dokteru = Dokter::model()->findAllBySql('SELECT * FROM `t_dokter` WHERE `id_spesialis` IS NULL');
            foreach ($dokteru as $dru) {
          ?>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/dokter/<?php if($dru->foto==null) { echo 'dok-anon.png'; } else { echo "foto/".$dru->foto; } ?>');"></div>
              </div>
              <div class="text pt-3 text-center">
                <h4><?php echo $dru->nama_dokter; ?></h4>
                <span class="position mb-2">
                  <?php $sp = Spesialis::model()->findByAttributes(array('kd_spesialis'=>$dru->id_spesialis));
                      
                    if ($dru->id_spesialis == null) {
                      echo "Dokter Umum";
                    } else { 
                      echo $sp->nama_spesialis;
                    }
                  ?></span>
              </div>
            </div>
          </div>
        <?php } ?>
         
        </div>

      </div>
    </section>