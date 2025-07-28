<?php 
/* @var $this RoleMasterController */
/* @var $model RoleMaster */

$this->breadcrumbs=array(
	'Role Master'=>array('admin')
);

?>


<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'role_name',
	),
)); ?>
