<?php 
/* @var $this TestimonialController */
/* @var $model Testimonial */

$this->breadcrumbs=array(
	'Testimonial'=>array('admin'),
);

?>
<center>
<?php  echo CHtml::link('Add New',array('Testimonial/Create'),array('class'=>'btn btn-primary')); ?>
</center>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'testimonial-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn',
		),
		// array(        
		//      'type'=>'raw',
        //              'name'=>'logo',
        //              'value'=>  '($data["logo"]!="")?"<img src='.Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/testimonial/$data[logo]  height=100px />":"No Image Uploaded"',
        //         ),
		'name',
		array(        

			'name'=>'details',
			'value'=>  'strip_tags($data["details"], "<br>")',
	   ),
		array(
			'name'=>'active',
			'filter'=>array("1"=>"Active","0"=>"Inactive"),
			'value'=>'($data["active"]==1)?"Active":"InActive"',
		),
		'sort',		
	),
)); ?>
