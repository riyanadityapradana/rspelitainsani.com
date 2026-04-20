<?php
/* @var $this KegiatanController */
/* @var $data Kegiatan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kegiatan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kegiatan), array('view', 'id'=>$data->id_kegiatan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_selesai); ?>
	<br />


</div>