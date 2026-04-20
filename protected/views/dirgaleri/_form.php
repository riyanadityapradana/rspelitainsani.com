<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dirgaleri-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	 'htmlOptions'=>array('class'=>'form-horizontal')
)); ?>

      <div class="box-body">
        <div class="form-group" style="display: none">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'id_direktori'); ?></label>
          <div class="col-sm-6">
          	<?php echo $form->textField($model,'id_direktori',array('class'=>'form-control','readonly'=>true,'value'=> (($model->isNewRecord) ? $model->genIdEntry() : $model->id_direktori),)); ?>
      		<?php echo $form->error($model,'id_direktori'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'nama_direktori'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'nama_direktori',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'nama_direktori'); ?>
          </div>
        </div>
       
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/dirgaleri/admin" class="btn btn-danger btn-flat">Kembali</a>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save',array('class'=>'btn btn-success btn-flat pull-right')); ?>
      </div>
      <!-- /.box-footer -->

<?php $this->endWidget(); ?>