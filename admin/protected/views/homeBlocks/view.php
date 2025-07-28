<?php
/* @var $this HomeBlocksController */
/* @var $model HomeBlocks */
$this->pageTitle="HomeBlocks";
$this->breadcrumbs=array(
	'HomeBlocks'=>array('admin'),

);
?>


<div class="box  box-solid bg-blue-gradient">
	<div class="box-header">
	 <h1>View HomeBlock  #<?php echo $model->id; ?></h1>
	 
	</div>
	<div class="box-body no-padding">
	  	
	</div>
	<div class="box-footer text-black">
<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'Type',
			'value'=>getBlockType($model->type),
	    ), 
		'title',
		'sub_title',
		'link',
		'sequence',
		array(
                        'name'=>' Active',
                        'value'=>($model->active=="0")?'Inactive':'Active',
                ), 
			
		
	),
)); 
function getBlockType($id)
{
	if($id==1)
		return "Service";
	else
		return "Video";
} ?>
		
</div>
</div>

