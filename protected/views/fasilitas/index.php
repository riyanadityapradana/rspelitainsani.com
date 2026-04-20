<?php
/* @var $this FasilitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fasilitases',
);

$this->menu=array(
	array('label'=>'Create Fasilitas', 'url'=>array('create')),
	array('label'=>'Manage Fasilitas', 'url'=>array('admin')),
);
?>

<h1>Fasilitases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
