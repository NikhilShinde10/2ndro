<?php 
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contacts'=>array('admin'),
	
);

?>


<?php  $this->renderPartial('_form', array('model'=>$model)); ?>