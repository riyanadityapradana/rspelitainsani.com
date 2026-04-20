<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/galeri/donor-darah.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Galeri</h1>
          </div>
        </div>
      </div>
    </section>
<style type="text/css">
  ul.yiiPager {
    margin:auto;
    color:inherit;
    display: block;
  }

  ul.yiiPager a:link, ul.yiiPager a:visited {
    border: solid 1px #dddddd;
    padding: 5px 10px;
  }

  .staff .text h5 {
    font-size: 15px;
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
          <!-- <?php 
            //$galeri = Galeri::model()->findAll();
            //foreach ($galeri as $g) {
          ?> -->
          <?php foreach($models as $g): ?>
          <div class="col-md-4 col-lg-3 ftco-animate">
            <div class="staff">
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/galeri/foto/<?php echo $g->id_direktori;?>">
                <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/galeri/dir.png"></div>
                </div>
                <div class="text text-center">
                  <h5><?php echo $g->nama_direktori; ?></h5>
                  
                </div>
              </a>
            </div>
          </div>
          <?php endforeach; ?>
        <!-- <?php // } ?> -->

        </div>
        
        <?php $this->widget('CLinkPager', array(
            'pages' => $pages,
        )) ?>
      </div>
    </section>