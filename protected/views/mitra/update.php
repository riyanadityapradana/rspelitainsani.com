<?php
/* @var $this MitraController */
/* @var $model Mitra */

$this->breadcrumbs=array(
	'Mitras'=>array('index'),
	$model->id_mitra=>array('view','id'=>$model->id_mitra),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mitra', 'url'=>array('index')),
	array('label'=>'Create Mitra', 'url'=>array('create')),
	array('label'=>'View Mitra', 'url'=>array('view', 'id'=>$model->id_mitra)),
	array('label'=>'Manage Mitra', 'url'=>array('admin')),
);
?>

<h1>Update Mitra <?php echo $model->id_mitra; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>