<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/themes/drcare/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Daftar Berita/Pengumuman/Artikel</h1>
          </div>
        </div>
      </div>
    </section>
 <section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<?php for ($i=0; $i < 6; $i++) { ?>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/themes/drcare/images/image_2.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">23</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                </div>
              </div>
            </div>
          </div>
					<?php } ?>
				</div>
			</div>
		</section>

