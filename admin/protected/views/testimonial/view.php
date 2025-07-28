<?php 
$this->breadcrumbs=array(
	'Testimonial'=>array('admin'),
);
?>
<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'details',
		array(        
		     'type'=>'raw',
                     'name'=>'logo',
                     'value'=>  ($model->logo!="")?'<img src='.Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/testimonial/'.$model->logo.'  height="100px" />':'No Image Uploaded',
                ),
		array(
                        'name'=>'active',
                        'value'=>($model->active=="0")?'Inactive':'Active',
                ), 
		'sort',
	),
)); ?>
