<?php 
/* @var $this DoctorsController */
/* @var $model Doctors */
$this->pageTitle="Doctors";
$this->breadcrumbs=array(
	'Doctors'=>array('admin'),
	
);


?>



<?php  $this->renderPartial('_form_update', array('model'=>$model)); ?>
