<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-gray-light">
              <div class="widget-user-image">
                <!-- <i class="fa fa-stethoscope fa-3x"></i> -->
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon/content.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Manajemen Berita</h3>
              <h5 class="widget-user-desc">Deskripsi Tabel Manajemen Berita</h5>
            </div>

        <div class="box-body">
          <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/berita/create"><i class="fa fa-plus"></i>Tambah Data</a>
          <div class="btn-group pull-right">
            <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/kategori/admin"><i class="fa fa-th"></i>Data Kategori</a>
          </div>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">#</th>
                  <th>Tgl</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Status</th>
                  <th width="150px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $dok=Berita::model()->findAll();
                  $h=0;
                  foreach($dok as $d){
                    $h++;
                ?>  
                <tr>
                  <td><?php echo $h;?></td>
                  <td><?php echo $d->tgl_berita;?></td>
                  <td><?php echo $d->judul;?></td>
                  <td><?php $sp=Kategori::model()->findByAttributes(array('id_kategori'=>$d->kategori)); echo $sp->nama_kategori; ?></td>
                  <td><?php echo $d->status;?></td>
                  <td></td>
                </tr>
                <?php } ?>
                
                </tbody>
              </table>
          </div>
          </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
