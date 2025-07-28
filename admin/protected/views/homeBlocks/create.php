<?php
/* @var $this HomeBlocksController */
/* @var $model HomeBlocks */
$this->pageTitle="HomeBlocks";
$this->breadcrumbs=array(
	'HomeBlocks'=>array('admin'),

);
?>
<div class="box box-info">
    <div class="box-header">
		<h1 class="box-title">
		Manage	HomeBlocks		</h1>
      <!-- tools box -->
    </div>
     <div class="box-footer text-black">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>