<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Dir. Galeri
        <small>Tambah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dir. Galeri</a></li>
        <li class="active">Tambah</li>
      </ol>
    </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"></h3>
      </div>
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
      <!-- /.box-body -->

    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>