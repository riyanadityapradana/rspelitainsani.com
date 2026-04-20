<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kegiatan'); ?>
		<?php echo $form->textField($model,'id_kegiatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kegiatan'); ?>
		<?php echo $form->textField($model,'nama_kegiatan',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_mulai'); ?>
		<?php echo $form->textField($model,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_selesai'); ?>
		<?php echo $form->textField($model,'tgl_selesai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->