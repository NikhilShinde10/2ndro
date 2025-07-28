<?php 
$this->pageTitle="View Blog";
$this->breadcrumbs=array(
	'Blog'=>array('admin'),

);
$ext = explode(".",$model->logo);
				$ext = end($ext);				
				$filen=$model->id."-blog.".$ext;
				$path=Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/blog/'.$filen; 
				

?>

<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'title',	
		'category',
		'author',
		array(        	
		    'type'=>'raw',
                     'name'=>'logo',
                     'value'=>  ($model->logo!=null)?'<div class="col-md-3"><img src='.$path.' class="img-responsive" /></div>':'',
                ),
		'description',
		  array(
                        'name'=>'date',
                        'value'=>date_format(date_create($model->date), "d-m-Y "),
                ), 
		'sort',
		array(
                        'name'=>'active',
                        'value'=>($model->active=="0")?'Inactive':'Active',
                ), 
		 array(
                        'name'=>'created_at',
                        'value'=>date_format(date_create($model->created_at), "d-m-Y "),
                ), 
	),
)); ?>
