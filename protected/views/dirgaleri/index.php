<?php
/* @var $this DirgaleriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dirgaleris',
);

$this->menu=array(
	array('label'=>'Create Dirgaleri', 'url'=>array('create')),
	array('label'=>'Manage Dirgaleri', 'url'=>array('admin')),
);
?>

<h1>Dirgaleris</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
