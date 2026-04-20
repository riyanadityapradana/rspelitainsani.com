<?php
/* @var $this MitraController */
/* @var $model Mitra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mitra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textArea($model,'nama',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo $form->textArea($model,'gambar',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gambar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis'); ?>
		<?php echo $form->textField($model,'jenis',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'jenis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->