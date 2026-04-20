<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-gray-light">
              <div class="widget-user-image">
                <!-- <i class="fa fa-stethoscope fa-3x"></i> -->
                <img class="img-circle" src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon/fasilitas.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Manajemen Data Fasilitas</h3>
              <h5 class="widget-user-desc">Deskripsi Tabel Manajemen Data Fasilitas</h5>
            </div>

        <div class="box-body">
          <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/fasilitas/create"><i class="fa fa-plus"></i>Tambah Data</a>
          <div class="btn-group pull-right">
            <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/kelfasilitas/admin"><i class="fa fa-hospital-o"></i>Kategori Fasilitas</a>
          </div>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">#</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th width="100px">Gambar</th>
                  <th width="150px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $fas=Fasilitas::model()->findAll();
                  $h=0;
                  foreach($fas as $f){
                    $h++;
                ?>  
                <tr>
                  <td><?php echo $h;?></td>
                  <td><?php echo $f->nama;?></td>
                  <td><?php $kf = Kelfasilitas::model()->findByAttributes(array('id'=>$f->kategori));echo $kf->nama;?></td>
                  <td align="center"><a href="javascript:;" class="btn btn-default btn-xs edit-record" data-id="<?php echo $f->id_fasilitas;?>">Lihat</a></td>
                  <td align="center"><div class="btn-group">
                      <a href="<?php echo Yii::app()->baseUrl?>/fasilitas/update/<?= $f->id_fasilitas ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-xs"></i></a>
                      <a href="<?php echo Yii::app()->baseUrl?>/fasilitas/delete/<?= $f->id_fasilitas ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Yakin Dihapus?')"><i class="fa fa-close fa-xs"></i></a>
                    </div></td>
                </tr>
                <?php } ?>
                
                </tbody>
              </table>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                       
                    </div>
                    <div class="modal-body" style="text-align: center;">
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
          </div>
          </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <script>
     $(function(){
            $(document).on('click','.edit-record',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('<?php echo Yii::app()->baseUrl?>/fasilitas/detail',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }
                );
            });
        });
</script>