<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-gray-light">
              <div class="widget-user-image">
                <!-- <i class="fa fa-stethoscope fa-3x"></i> -->
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon/galeri.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Manajemen Data Galeri</h3>
              <h5 class="widget-user-desc">Deskripsi Tabel Manajemen Data Galeri</h5>
            </div>

        <div class="box-body">
          <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/galeri/create"><i class="fa fa-plus"></i>Tambah Data</a>
          <div class="btn-group pull-right">
            <a class="btn btn-app" href="<?php echo Yii::app()->baseUrl?>/dirgaleri/admin"><i class="fa fa-folder-open"></i>Direktori Galeri</a>
          </div>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">#</th>
                  <th>Judul</th>
                  <th width="100px">Gambar</th>
                  <th>Direktori</th>
                  <th width="150px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $gal=Galeri::model()->findAll(array('order'=>'id_galeri DESC'));
                  $h=0;
                  foreach($gal as $g){
                    $h++;
                ?>  
                <tr>
                  <td><?php echo $h;?></td>
                  <td><?php echo $g->judul;?></td>
                  <td align="center"><a href="javascript:;" class="btn btn-default btn-xs edit-record" data-id="<?php echo $g->id_galeri;?>">Lihat</a></td>
                  <td><?php 
                      $dir = Dirgaleri::model()->findByAttributes(array('id_direktori'=>$g->direktori)); 
                      echo $dir->nama_direktori;?></td>
                  <td align="center"><div class="btn-group">
                      <a href="<?php echo Yii::app()->baseUrl?>/galeri/update/<?= $g->id_galeri ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-xs"></i></a>
                      <a href="<?php echo Yii::app()->baseUrl?>/galeri/delete/<?= $g->id_galeri ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Yakin Dihapus?')"><i class="fa fa-close fa-xs"></i></a>
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
                $.post('<?php echo Yii::app()->baseUrl?>/galeri/detail',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }
                );
            });
        });
</script>