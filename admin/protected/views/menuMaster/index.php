<?php 
/* @var $this MenuMasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu Masters',
);

$this->menu=array(
	array('label'=>'Create MenuMaster', 'url'=>array('create')),
	array('label'=>'Manage MenuMaster', 'url'=>array('admin')),
);
?>

<h1>Menu Masters</h1>

<?php  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
