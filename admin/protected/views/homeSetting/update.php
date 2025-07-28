<?php 
/* @var $this HomeSettingController */
/* @var $model HomeSetting */

$this->breadcrumbs=array(
	'Home Page Setting'=>array('admin'),
);

?>


<?php  $this->renderPartial('_form_update', array('model'=>$model)); ?>