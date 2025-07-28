<?php 
$this->pageTitle="View Services";
$this->breadcrumbs=array(
	'Services'=>array('admin'),

);
?>

<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'title',
        array(
			'name'=>'description',
			'value'=>strip_tags($model->description, "<br>"),
	   ), 
           array(
                        'name'=>'created_at',
                        'value'=>date_format(date_create($model->created_at), "d-m-Y "),
                ), 
		array(
                        'name'=>'active',
                        'value'=>($model->active=="0")?'Inactive':'Active',
                ), 
	),
)); ?>
