<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-gray-light">
              <div class="widget-user-image">
                <!-- <i class="fa fa-stethoscope fa-3x"></i> -->
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon/kate.png" alt="User Avatar" s>
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Manajemen Data Kategori</h3>
              <h5 class="widget-user-desc">Deskripsi Tabel Manajemen Data Kategori</h5>
            </div>

        <div class="box-body">
          <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/kategori/create"><i class="fa fa-plus"></i>Tambah Data</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">#</th>
                  <th>Kategori</th>
                  <th>Isi Kategori</th>
                  <th width="150px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $dok=Kategori::model()->findAll();
                  $h=0;
                  foreach($dok as $d){
                    $h++;
                ?>  
                <tr>
                  <td><?php echo $h;?></td>
                  <td><?php echo $d->nama_kategori;?></td>
                  <td><?php echo $d->isi_kategori;?></td>
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
