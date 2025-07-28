<?php 
$this->pageTitle="View About Us";
$this->breadcrumbs=array(
	'Abou Us'=>array('admin'),

);
$ext = explode(".",$model->banner);
				$ext = end($ext);				
				$filen=$model->id."-AboutUs.".$ext;
				$path=Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/AboutUs/'.$filen; 
				
				$ext1 = explode(".",$model->image);
				$ext1= end($ext1);				
				$filen1=$model->id."-AboutUs-image.".$ext1;
				$imagepath=Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/AboutUs/'.$filen1; 
?>

<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'title',	
		'sub_title',
		array(        	
		    'type'=>'raw',
                     'name'=>'banner',
                     'value'=>  ($model->banner!=null)?'<div class="col-md-3"><img src='.$path.' class="img-responsive" /></div>':'',
                ),
		array(        	
		    'type'=>'raw',
                     'name'=>'image',
                     'value'=>  ($model->image!=null)?'<div class="col-md-3"><img src='.$imagepath.' class="img-responsive" /></div>':'',
                ),
		array(
			'name'=>'block1',
			'value'=>strip_tags($model->block1, "<br>"),
	   ), 
	   'paragraph',
	   array(
		'name'=>'block2',
		'value'=>strip_tags($model->block2, "<br>"),
		), 
		 array(
                        'name'=>'created_at',
                        'value'=>date_format(date_create($model->created_at), "d-m-Y "),
                ), 
	),
)); ?>
