<?php 
/* @var $this DoctorsController */
/* @var $model Doctors */
$this->pageTitle="Doctors";
$this->breadcrumbs=array(
	'Doctors'=>array('admin'),

);
$path="";
				if($model->image!="")
				{
				$path=Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/team/'.$model->image; 
				}
?>



<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'education',
		'interest',
		array(        
			'type'=>'raw',
					'name'=>'specialisation',
					'value'=> $model->Specialization!==null && $model->Specialization->title,
			   ),
		
		array(        
			'type'=>'raw',
					'name'=>'details',
					'value'=>  strip_tags($model->details),
			   ),
		array(        
		     'type'=>'raw',
                     'name'=>'image',
                     'value'=>  ($model->image!="")?'<img src='.$path.' width="150px" height="150px" />':'No Image Uploaded',
                ),
		 array(
                        'name'=>'active',
                        'value'=>($model->active=="0")?'Inactive':'Active',
                ), 				
		'sort',
	),
)); 



?>
