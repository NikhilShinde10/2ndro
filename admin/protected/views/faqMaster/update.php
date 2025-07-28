<?php
/* @var $this FaqMasterController */
/* @var $model FaqMaster */
$this->pageTitle="Faq Master";
$this->breadcrumbs=array(
	'Faq Master'=>array('admin'),

);
?>

<div class="box box-info">
    <div class="box-header">
		<h1 class="box-title">
		Update FAQ		</h1>
      <!-- tools box -->
    </div>
     <div class="box-footer text-black">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
