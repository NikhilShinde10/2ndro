<?php 
/* @var $this HomeSettingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Home Settings',
);

$this->menu=array(
	array('label'=>'Create HomeSetting', 'url'=>array('create')),
	array('label'=>'Manage HomeSetting', 'url'=>array('admin')),
);
?>

<h1>Home Settings</h1>

<?php  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
