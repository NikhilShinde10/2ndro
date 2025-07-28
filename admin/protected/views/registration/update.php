<?php 
$this->pageTitle="Registration";
$this->breadcrumbs=array(
	'Registration'=>array('admin'),


);

?>


<?php  $this->renderPartial('_form', array('model'=>$model)); ?>
