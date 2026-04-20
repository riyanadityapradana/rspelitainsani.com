<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-gray-light">
              <div class="widget-user-image">
                <!-- <i class="fa fa-stethoscope fa-3x"></i> -->
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon/sche.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Manajemen Jadwal Poliklinik</h3>
              <h5 class="widget-user-desc">Deskripsi Tabel Manajemen Data Dokter</h5>
            </div>

        <div class="box-body">
          <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/jadwalpoli/create"><i class="fa fa-plus"></i>Tambah Data</a>
          <div class="btn-group pull-right">
            <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/klinik/admin"><i class="fa fa-hospital-o"></i>Data Klinik</a>
          </div>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">#</th>
                  <th>Klinik</th>
                  <th>Dokter</th>
                  <th>Jadwal</th>
                  <th>Keterangan</th>
                  <th width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $japol=Jadwalpoli::model()->findAll();
                  $h=0;
                  foreach($japol as $jp){
                    $h++;
                ?>  
                <tr>
                  <td><?php echo $h;?></td>
                  <td><?php $kl=Klinik::model()->findByAttributes(array('id_klinik'=>$jp->klinik)); echo $kl->nama_klinik; ?></td>
                  <td><?php $dk=Dokter::model()->findByAttributes(array('id_dokter'=>$jp->dokter)); echo $dk->nama_dokter; ?></td>
                  <td><?php echo $jp->hari.'/'.$jp->jam;?></td>
                  <td><?php echo $jp->keterangan;?></td>
                  <td align="center"><div class="btn-group">
                      <a href="<?php echo Yii::app()->baseUrl?>/jadwalpoli/update/<?= $jp->id_jadwal ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-xs"></i></a>
                      <a href="<?php echo Yii::app()->baseUrl?>/jadwalpoli/delete/<?= $jp->id_jadwal ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Yakin Dihapus?')"><i class="fa fa-close fa-xs"></i></a>
                    </div></td>
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
