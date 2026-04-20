<?php
$brt = Konten::model()->findByAttributes(array('id_konten'=>$id));
$ktg = Kategori::model()->findByAttributes(array('id_kategori'=>$brt->kategori));
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/upload/konten/<?php echo $brt->gambar;?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread"><?php echo $ktg->isi_kategori;?></h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3"><?php echo $brt->judul;?></h2>
            <h6 class="mb-3"><span class="icon-calendar"></span> <?php echo Yii::app()->dateFormatter->format("dd MMM yyyy",$brt->tgl_entry)?></h6>
            <p>
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/upload/konten/<?php echo $brt->gambar;?>" alt="" class="img-fluid">
            </p>
            <p><?php echo $brt->isi;?></p>
            
           
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/list/<?php echo $ktg->id_kategori;?>" class="tag-cloud-link"><?php echo $ktg->nama_kategori;?></a>
              </div>
            </div>


          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            <!-- <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Pencarian">
                </div>
              </form>
            </div> -->
            <style type="text/css">
              .block-21 .text .heading a:hover, .block-21 .text .heading a:active, .block-21 .text .heading a:focus {
                color: #3bb3c2;
              }
            </style>
            <div class="sidebar-box ftco-animate">
              <h3>Konten Terbaru</h3>
			  <?php
			  $beritas1 = Konten::model()->findAllByAttributes(array('status'=>1),array('order'=>'id_konten desc','limit'=>5));
			  foreach($beritas1 as $brs){
				  $ktg1 = Kategori::model()->findByAttributes(array('id_kategori'=>$brs->kategori));
			  ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/upload/konten/<?php echo $brs->gambar;?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/isi/<?php echo $brs->id_konten;?>"><?php echo $brs->judul;?></a></h3>
                  <div class="meta">
                    <div><a ><span class="icon-calendar"></span> <?php echo Yii::app()->dateFormatter->format("dd/MM/y",$brs->tgl_entry)?></a></div>
                    <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/list/<?php echo $ktg->id_kategori;?>" ><span class="icon-folder"></span> <?php echo $ktg1->nama_kategori;?></a></div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Category</h3>
              <ul class="categories">
                <?php 
                  $kategori = Kategori::model()->findAll();
                  foreach ($kategori as $kat) {
					  $brtt = Konten::model()->findAllByAttributes(array('kategori'=>$kat->id_kategori,'status'=>1));
                ?>
                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/list/<?php echo $kat->id_kategori;?>"><?php echo $kat->nama_kategori; ?><span>(<?php echo count($brtt);?>)</span></a></li>
              <?php } ?>
              </ul>
            </div>
            <!-- <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <ul class="tagcloud m-0 p-0">
                <a href="#" class="tag-cloud-link">Medical</a>
                <a href="#" class="tag-cloud-link">Hospital</a>
                <a href="#" class="tag-cloud-link">Nurse</a>
                <a href="#" class="tag-cloud-link">Doctor</a>
                <a href="#" class="tag-cloud-link">Medicine</a>
                <a href="#" class="tag-cloud-link">Facilities</a>
                <a href="#" class="tag-cloud-link">Staff</a>
              </ul>
            </div> -->


          </div><!-- END COL -->
        </div>
      </div>
    </section>
