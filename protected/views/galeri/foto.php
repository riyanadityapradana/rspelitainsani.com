<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/galeri/donor-darah.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="bread">Galeri</h1>
            <h5 class="mb-2 bread"><?php
              $dg = Dirgaleri::model()->findByAttributes(array('id_direktori'=>$id));
              echo $dg->nama_direktori;
            ?></h5>
          </div>
        </div>
      </div>
    </section>
<style type="text/css">
  ul.yiiPager {
    margin:auto;
    color:inherit;
    display: table;
  }

  ul.yiiPager a:link, ul.yiiPager a:visited {
    border: solid 1px #dddddd;
    padding: 5px 10px;
  }

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

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modalg {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modalg-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modalg-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.gclose {
  position: absolute;
  z-index: 500;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.gclose:hover,
.gclose:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.modal-backdrop {
  z-index: 0;
}
/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modalg-content {
    width: 100%;
  }
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
          <div class="col-md-6 col-lg-4 ftco-animate">
            <a href="javascript:;" class="modal-galeri" data-id="<?php echo $g->id_galeri;?>">
            <div class="staff">

              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/galeri/<?php echo $g->gambar; ?>');"></div>
              </div>
              <div class="text pt-3 text-center">
                <!-- h4><?php echo $g->judul; ?></h4>
                <span class="mb-2">
                  <?php echo $g->deskripsi; ?></span> -->
              </div>
            </div>
          </a>
          </div>
          <div id="myModal" class="modalg">
            <span class="gclose" data-dismiss="modal">&times;</span>
            <div class="modal-body">
            </div>
            
            <div id="caption"></div>
          </div>
          <?php endforeach; ?>
        <!-- <?php // } ?> -->

        </div>
        
        <?php $this->widget('CLinkPager', array(
            'pages' => $pages,
        )) ?>
      </div>
    </section>
     <?php Yii::app()->clientScript->registerCoreScript("jquery");?>
    <script>
     $(function(){
            $(document).on('click','.modal-galeri',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('<?php echo Yii::app()->baseUrl?>/galeri/modalgaleri',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }
                );
            });

            // $(document).on('click','.gclose',function(e){
            //   $("#myModal").modal('hide');
            // });
            // Get the <span> element that closes the modal
var span = document.getElementsByClassName("gclose")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
        });
</script>