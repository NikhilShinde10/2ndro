<?php 
$this->breadcrumbs=array(
	'Contact'=>array('index'),
);
$contact=Contact::model()->findAll();
?>

<center>
<?php  
if(count($contact)==0)
echo CHtml::link('Add New',array('Contact/Create'),array('class'=>'btn btn-primary'));
 ?>
</center>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn',
		),
		'address',
		'email',
		'phone',
	),
)); ?>
