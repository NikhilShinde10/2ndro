<?php 
/* @var $this RoleMasterController */
/* @var $model RoleMaster */

$this->breadcrumbs=array(
	'Role Master'=>array('admin'),
	'Create',
);

?>

<div class="box  box-solid bg-blue-gradient">
	<div class="box-header">
	 <h1>Create Role</h1>
	 
	</div>
	<div class="box-body no-padding">
	  	
	</div>
	<div class="box-footer text-black">
<?php  $this->renderPartial('_form', array('model'=>$model)); ?>
</div></div>