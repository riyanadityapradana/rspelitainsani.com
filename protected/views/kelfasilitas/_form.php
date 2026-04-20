<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kelfasilitas-form',
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
       
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/kelfasilitas/admin" class="btn btn-danger btn-flat">Kembali</a>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save',array('class'=>'btn btn-success btn-flat pull-right')); ?>
      </div>
      <!-- /.box-footer -->

<?php $this->endWidget(); ?>