<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kategori-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
'htmlOptions'=>array('class'=>'form-horizontal')
)); ?>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'nama_kategori'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'nama_kategori',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'nama_kategori'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'isi_kategori'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'isi_kategori',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'isi_kategori'); ?>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/kategori/admin" class="btn btn-danger btn-flat">Kembali</a>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save',array('class'=>'btn btn-success btn-flat pull-right')); ?>
      </div>
      <!-- /.box-footer -->

<?php $this->endWidget(); ?>
