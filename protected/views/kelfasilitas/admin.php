<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-gray-light">
              <div class="widget-user-image">
                <!-- <i class="fa fa-stethoscope fa-3x"></i> -->
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon/fasilitas.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Manajemen Data Kel. Fasilitas</h3>
              <h5 class="widget-user-desc">Deskripsi Tabel Manajemen Data Kel. Fasilitas</h5>
            </div>

        <div class="box-body">
          <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/kelfasilitas/create"><i class="fa fa-plus"></i>Tambah Data</a>
          <div class="btn-group pull-right">
            <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/fasilitas/admin"><i class="fa fa-hospital-o"></i>Data Fasilitas</a>
          </div>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">#</th>
                  <th>Nama</th>
                  <th width="150px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $gal=Kelfasilitas::model()->findAll();
                  $h=0;
                  foreach($gal as $g){
                    $h++;
                ?>  
                <tr>
                  <td><?php echo $h;?></td>
                  <td><?php echo $g->nama;?></td>
                  <td align="center"><div class="btn-group">
                      <a href="<?php echo Yii::app()->baseUrl?>/kelfasilitas/update/<?= $g->id ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-xs"></i></a>
                      <a href="<?php echo Yii::app()->baseUrl?>/kelfasilitas/delete/<?= $g->id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Yakin Dihapus?')"><i class="fa fa-close fa-xs"></i></a>
                    </div></td>
                </tr>
                <?php } ?>
                
                </tbody>
              </table>
          </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>