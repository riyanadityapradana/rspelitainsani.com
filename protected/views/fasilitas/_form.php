<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fasilitas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	 'htmlOptions'=>array('enctype'=>'multipart/form-data','class'=>'form-horizontal')
)); ?>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'nama'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'nama',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'nama'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'menu'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'menu',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'menu'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'deskripsi'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control','id'=>'editor-berita')); ?>
      		<?php echo $form->error($model,'deskripsi'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'gambar'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->fileField($model,'gambar',array('class'=>'form-control','required'=>true)); ?>
		  <p class="help-block">Gambar dengan ekstensi jpg, jpeg, gif, dan png.</p>
		  <?php echo $form->error($model,'gambar'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'kategori'); ?></label>
          <div class="col-sm-6">
          	<style> .select2-results__group {display: none !important;} </style>
          	<?php
              $opts = CHtml::listData(Kelfasilitas::model()->findAll(),'id','nama');
              echo $form->dropDownList($model,'kategori',array(''=>'Pilih..',$opts),array('class'=>'form-control select2','style'=>'width:100%'));              
            ?>
      		<?php echo $form->error($model,'kategori'); ?>
          </div>
        </div>
       
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/fasilitas/admin" class="btn btn-danger btn-flat">Kembali</a>
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