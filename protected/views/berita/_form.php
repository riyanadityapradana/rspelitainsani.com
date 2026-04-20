<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'berita-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

      <div class="box-body">
      	<div class="col-md-9">
	        <div class="form-group">
	          <label class="control-label"><?php echo $form->labelEx($model,'judul'); ?></label>
	      		<?php echo $form->textField($model,'judul',array('class'=>'form-control')); ?>
	      		<?php echo $form->error($model,'judul'); ?>
	        </div>

	        <div class="form-group">
	          <label class="control-label"><?php echo $form->labelEx($model,'isi'); ?></label>
	      		<?php echo $form->textArea($model,'isi',array('class'=>'form-control','id'=>'editor-berita')); ?>
	      		<?php echo $form->error($model,'isi'); ?>
	        </div>
      		<div class="form-group">
	          <label class="control-label"><?php echo $form->labelEx($model,'gambar'); ?></label>
	      		<?php echo $form->fileField($model,'gambar',array('class'=>'form-control')); ?>
	      		<?php echo $form->error($model,'gambar'); ?>
	        </div>
      	</div>
      	<div class="col-md-3">
	        <div class="form-group">
	          <label class="control-label" style="display: block;"><?php echo $form->labelEx($model,'kategori'); ?></label>
	      		<?php echo $form->radioButtonList($model, 'kategori', array('1'=>'Berita','2'=>'Pengumuman','3'=>'Artikel'),array('class'=>"",'required'=>true)); ?>
	      		<?php echo $form->error($model,'kategori'); ?>
	        </div>
	        <div class="form-group">
	          <label class="control-label" style="display: block;"><?php echo $form->labelEx($model,'status'); ?></label>
	      		<?php echo $form->radioButtonList($model, 'status', array('1'=>'Publish', '2'=>'Draft'),array('class'=>"",'required'=>true)); ?>
	      		<?php echo $form->error($model,'status'); ?>
	        </div>
      	</div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/berita/admin" class="btn btn-danger btn-flat">Kembali</a>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save',array('class'=>'btn btn-success btn-flat pull-right')); ?>
      </div>
      <!-- /.box-footer -->

<?php $this->endWidget(); ?>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/ckeditor/ckeditor.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor-berita')
  })
</script>
<script>
  $(document).ready(function(){
        //iCheck for checkbox and radio inputs
    $('.minimal').iCheck({
      radioClass   : 'iradio_minimal-blue'
    })
  })
</script>