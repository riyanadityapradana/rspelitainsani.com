<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kegiatan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kegiatan'); ?>
		<?php echo $form->textField($model,'nama_kegiatan',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nama_kegiatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_mulai'); ?>
		<?php echo $form->textField($model,'tgl_mulai'); ?>
		<?php echo $form->error($model,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_selesai'); ?>
		<?php echo $form->textField($model,'tgl_selesai'); ?>
		<?php echo $form->error($model,'tgl_selesai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->