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
	 <h1>View Menu</h1>
	 
	</div>
	<div class="box-body no-padding">
	  	
	</div>
	<div class="box-footer text-black">
<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'menu_id',
		'menu_desc',
		array(
			'name'=>'menu_url',
			'value'=>($model->menu_url!="javascript:void(0)")?$model->menu_url:"",
		),
		array(
			'name'=>'parent_id',
			'value'=>($model->parent_id!=0)?$model->ParentMenu->menu_desc:"No Parent",
			
		),
		array(
			'name'=>'icon',
			'value'=>($model->icon!="")?$model->icon:"NA",
		
		),
		array(
			'name'=>'active',
			'value'=>($model->active!=0)?"Active":"Inactive",
		
		),
		
		'sequence_no',

	),
)); ?>
</div></div>
