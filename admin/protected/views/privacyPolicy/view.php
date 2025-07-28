<?php 
/* @var $this PrivacyPolicyController */
/* @var $model PrivacyPolicy */

$this->breadcrumbs=array(
	'Policies'=>array('admin'),
);

?>


<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'title',
		array(
			'name'=>'type',
			'value'=>getCategory($model->type),
	), 
		array(
			'name'=>'details',
			'value'=>strip_tags($model->details, "<br>"),
	), 
 array(
			'name'=>'status',
			'value'=>($model->status=="0")?'Inactive':'Active',
	), 
array(
			'name'=>'created_at',
			'value'=>date_format(date_create($model->created_at), "d-m-Y "),
	), 
	),
)); 
function getCategory($id)
{
	if($id==1)
		return "Terms & Condition";
	else if($id==2)
		return "Cookie Policy";
	else if($id==3)
		return "Refund Policy";
	else
		return "Privacy Policy";
} ?>
