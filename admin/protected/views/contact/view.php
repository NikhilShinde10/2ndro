<?php 
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contact'=>array('admin'),
);

?>


<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'address',
		'email',
		'phone'
	),
)); ?>
