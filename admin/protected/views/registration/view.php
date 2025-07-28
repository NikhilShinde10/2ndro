<?php 
$this->pageTitle="View Registration";
$this->breadcrumbs=array(
	'Registration'=>array('admin'),

);
?>

<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'title',	
		'sub_title',
		array(
			'name'=>'block1',
			'value'=>strip_tags($model->block1, "<br>"),
	   ), 
	   array(
		'name'=>'block2',
		'value'=>strip_tags($model->block2, "<br>"),
		), 
		'step1',
		'step2', 
		'step3', 
		'step4', 
		'step5', 
		 array(
                        'name'=>'created_at',
                        'value'=>date_format(date_create($model->created_at), "d-m-Y "),
                ), 
	),
)); ?>
