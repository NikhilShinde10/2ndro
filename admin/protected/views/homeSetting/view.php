<?php 
/* @var $this HomeSettingController */
/* @var $model HomeSetting */

$this->breadcrumbs=array(
	'Home Page Setting'=>array('admin'),
);
?>
<?php  $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(        
		     'type'=>'raw',
                     'name'=>'logo',
                     'value'=>  ($model->logo!="")?'<img src='.Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/setting/'.$model->logo.'  height="100px" />':'No Image Uploaded',
                ),
		'tagline',
		array(        
		     'type'=>'raw',
                     'name'=>'home_slider_image',
                     'value'=>  ($model->home_slider_image!="")?'<img src='.Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/setting/'.$model->home_slider_image.'  height="100px" />':'No Image Uploaded',
                ),
		'home_slider_h1',
		'home_slider_subtitle1',
		array(        
			'type'=>'raw',
					'name'=>'home_slider_image1',
					'value'=>  ($model->home_slider_image1!="")?'<img src='.Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/setting/'.$model->home_slider_image1.'  height="100px" />':'No Image Uploaded',
			   ),
		'home_slider_h2',
		'home_slider_subtitle2',
		'about_title',
		'about_us',
		array(        
			'type'=>'raw',
					'name'=>'about_area_image',
					'value'=>  ($model->about_area_image!="")?'<img src='.Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/setting/'.$model->about_area_image.'  height="100px" />':'No Image Uploaded',
			   ),
		'focus_title',
		'focus_area',		
		'service_title',
		'service_area',
		array(        
		     'type'=>'raw',
                     'name'=>'service_image',
                     'value'=>  ($model->service_image!="")?'<img src='.Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/setting/'.$model->service_image.'  height="100px" />':'No Image Uploaded',
                ),
		'copyright',
		'emergancy_block'
		
	),
)); ?>
