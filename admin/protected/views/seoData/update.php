<?php
/* @var $this SeoDataController */
/* @var $model SeoData */

$this->breadcrumbs=array(
	'Seo Data'=>array('admin'),
);

?>

<div class="box box-info">
    <div class="box-header">
		<h3 class="box-title">
			Seo Data		</h3>
      
    </div>
    <div class="box-body no-padding">
        
    </div>
    <div class="box-footer text-black">
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>
