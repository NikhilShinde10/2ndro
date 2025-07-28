<?php 
/* @var $this PrivacyPolicyController */
/* @var $model PrivacyPolicy */

$this->breadcrumbs=array(
	'Policies'=>array('admin'),
);

?>
<div class="box  box-solid bg-blue-gradient">
	<div class="box-header">
	 <h1>Privacy Policy</h1>
	 
	</div>
	<div class="box-body no-padding">
	  	
	</div>
	<div class="box-footer text-black">
<center>
<?php  echo CHtml::link('Add New',array('PrivacyPolicy/Create'),array('class'=>'btn btn-primary')); ?>
</center>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'policy-master-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn',
		),
		'title',
		array(
			'name'=>'type',
			'filter'=>array('0'=>'Privacy Policy','1'=>'Terms & Condition','2'=>'Cookie Policy','3'=>'Refund Policy'),
			'value'=>'getCategory($data["type"])',
		),
		array(        

			'name'=>'details',
			'value'=>  'strip_tags($data["details"], "<br>")',
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
} ?></div></div>
