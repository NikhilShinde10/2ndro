<?php 
/* @var $this ManagementProfilesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Management Profiles',
);

$this->menu=array(
	array('label'=>'Create ManagementProfiles', 'url'=>array('create')),
	array('label'=>'Manage ManagementProfiles', 'url'=>array('admin')),
);
?>

<h1>Management Profiles</h1>

<?php  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
