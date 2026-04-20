<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/fasilitas/fasilitas-head.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Fasilitas</h1>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Fasilitas Ruang Khusus</h2>
            <!-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
          </div>
        </div>
    		<div class="ftco-departments">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	            	<?php
	            		$fasilitas = Fasilitas::model()->findAllByAttributes(array('kategori'=>1));
	            		$i=0;
	            		foreach ($fasilitas as $fas) {
	            			$i++;
	            	?>
	              		<a class="nav-link ftco-animate" id="v-pills-<?php echo $i; ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $i; ?>" role="tab" aria-controls="v-pills-<?php echo $i; ?>" aria-selected="true"><?php echo $fas->menu; ?></a>

	            	<?php	} ?>
	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">
	            	<?php
	            		$j=0;
	            		foreach ($fasilitas as $fass) {
            			$j++;	
	            	?>
	              <div class="tab-pane fade" id="v-pills-<?php echo $j; ?>" role="tabpanel" aria-labelledby="v-pills-day-<?php echo $j; ?>-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-first d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url(<?php echo Yii::app()->request->baseUrl.'/images/fasilitas/'.$fass->gambar; ?>);min-height: 400px"></div>
	              		</div>
	              		<div class="col-md-8">
	              			<h2><?php echo $fass->nama; ?></h2>
	              			<p style="text-align: justify;"><?php echo $fass->deskripsi; ?></p>
<!-- 											<div class="row mt-5 pt-2">
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-first-aid-kit"></span></div>
														<div class="text">
															<h3>Primary Care</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-dropper"></span></div>
														<div class="text">
															<h3>Lab Test</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-experiment-results"></span></div>
														<div class="text">
															<h3>Symptom Check</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-heart-rate"></span></div>
														<div class="text">
															<h3>Heart Rate</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
											</div> -->
	              		</div>
	              	</div>
	              </div>
	          <?php } ?>
	            </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>

    <?php Yii::app()->clientScript->registerCoreScript("jquery");?>
    <script type="text/javascript">
    	$(function() {
    		$("a#v-pills-1-tab").addClass("active");
    		$("div#v-pills-1").addClass("py-2 show active");
    	});
    </script>