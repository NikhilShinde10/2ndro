<?php 
/* @var $this HomeSettingController */
/* @var $model HomeSetting */

$this->breadcrumbs=array(
	'Home Page Setting'=>array('admin'),
);
$Setting=HomeSetting::model()->findAll();

?>
<center>
<?php  
if(count($Setting)==0)
echo CHtml::link('Add Data',array('homeSetting/create'),array('class'=>'btn btn-primary'));
 ?>
</center>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'home-setting-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(		
		array(
			'class'=>'CButtonColumn',
		),
		'home_slider_h1',
		'home_slider_h2',
		'tagline',
		array(        
                     'name'=>'about_us',
                     'value'=>  'substr($data["about_us"], 0,100)',
                ),	
                array(        
                     'name'=>'focus_area',
                     'value'=>  'substr($data["focus_area"], 0,100)',
                ),	
                array(        
                     'name'=>'service_area',
                     'value'=>  'substr($data["service_area"], 0,100)',
                ),
		/*
		'focus_area_image',
		'our_belief',
		'our_belief_image',
		'copyright',
		'team_image',
		'portfolio_image',
		'media_image',
		*/
	),
)); ?>
