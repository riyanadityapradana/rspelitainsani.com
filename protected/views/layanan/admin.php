<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-gray-light">
              <div class="widget-user-image">
                <!-- <i class="fa fa-stethoscope fa-3x"></i> -->
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon/serv.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Manajemen Data Layanan</h3>
              <h5 class="widget-user-desc">Deskripsi Tabel Manajemen Data Layanan</h5>
            </div>

        <div class="box-body">
          <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/layanan/create"><i class="fa fa-plus"></i>Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">#</th>
                  <th>Layanan</th>
                  <th width="150px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $dok=Layanan::model()->findAll();
                  $h=0;
                  foreach($dok as $d){
                    $h++;
                ?>  
                <tr>
                  <td><?php echo $h;?></td>
                  <td><?php echo $d->nama_layanan;?></td>
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
