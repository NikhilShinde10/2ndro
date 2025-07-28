<?php
/* @var $this KlickAdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Klick Admins',
);

$this->menu=array(
	array('label'=>'Create KlickAdmin', 'url'=>array('create')),
	array('label'=>'Manage KlickAdmin', 'url'=>array('admin')),
);
?>

<h1>Klick Admins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
