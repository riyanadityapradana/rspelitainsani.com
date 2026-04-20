<style type="text/css">
	
.staff .img-wrap {
    height: 100px;
}

.ftco-departments .nav-pills .nav-link {
	width: 33.3333%;
}
</style>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/main/main2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Mitra</h1>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Perusahaan dan Asuransi Mitra</h2>
            <!-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
          </div>
        </div>
    		<div class="ftco-departments">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            		<a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Asuransi</a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Pihak Ketiga</a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Perusahaan</a>
	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">
	            	<div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="row departments">
	              		<?php 
            $mitra = Mitra::model()->findAllByAttributes(array('jenis'=>'1'));
          	foreach($mitra as $m): 
          	?>
          <div class="col-sm-2 ftco-animate">
            <div class="staff">
                <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-size: contain; background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/mitra/<?php echo $m->gambar; ?>"></div>
                </div>
            </div>
          </div>
          <?php endforeach; ?>
	              	</div>
	              </div>
	            	<div class="tab-pane py-2 fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="row departments">
	              		<?php 
            $mitra = Mitra::model()->findAllByAttributes(array('jenis'=>'2'));
          	foreach($mitra as $m): 
          	?>
          <div class="col-sm-2 ftco-animate">
            <div class="staff">
                <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-size: contain; background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/mitra/<?php echo $m->gambar; ?>"></div>
                </div>
            </div>
          </div>
          <?php endforeach; ?>
	              	</div>
	              </div>
	            	<div class="tab-pane py-2 fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="row departments">
	              		<?php 
            $mitra = Mitra::model()->findAllByAttributes(array('jenis'=>'3'));
          	foreach($mitra as $m): 
          	?>
          <div class="col-sm-2 ftco-animate">
            <div class="staff">
                <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-size: contain; background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/mitra/<?php echo $m->gambar; ?>"></div>
                </div>
            </div>
          </div>
          <?php endforeach; ?>
	              	</div>
	              </div>
	            </div>
	          </div>
	        </div>
        </div>
	            </div>
    </section>