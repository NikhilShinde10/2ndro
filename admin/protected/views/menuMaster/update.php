<?php 
/* @var $this MenuMasterController */
/* @var $model MenuMaster */

$this->breadcrumbs=array(
	'Menu Master'=>array('admin'),
	
);
$this->pageTitle="Menu Master";

?>
<div class="box  box-solid bg-blue-gradient">
	<div class="box-header">
	 <h1>Update Menu</h1>
	 
	</div>
	<div class="box-body no-padding">
	  	
	</div>
	<div class="box-footer text-black">

<?php  echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
