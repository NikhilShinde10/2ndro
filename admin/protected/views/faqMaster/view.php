<?php
/* @var $this FaqMasterController */
/* @var $model FaqMaster */
$this->pageTitle="Faq Master";
$this->breadcrumbs=array(
	'Faq Master'=>array('admin'),

);
?>


<div class="box  box-solid bg-blue-gradient">
	<div class="box-header">
	 <h1>View FAQ  #<?php echo $model->id; ?></h1>
	 
	</div>
	<div class="box-body no-padding">
	  	
	</div>
	<div class="box-footer text-black">
<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'Type',
			'value'=>getFaqType($model->type),
	    ), 
		'title',
		array(       

                     'name'=>'details',
                     'value'=> strip_tags($model->details, "<br>"),
                ),
	
		'sequence',
		array(
                        'name'=>' Active',
                        'value'=>($model->active=="0")?'Inactive':'Active',
                ), 
			
		
	),
)); 
function getFaqType($id)
{
	if($id==1)
		return "About Us";
	else if($id==2)
		return "Why Us";
	else
		return "FAQ";
} ?>
		
</div>
</div>

