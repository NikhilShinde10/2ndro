<?php 
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contact'=>array('admin'),
);
?>

<?php  $this->renderPartial('_form', array('model'=>$model)); ?>