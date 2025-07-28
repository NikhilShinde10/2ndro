<?php 
$this->pageTitle="OurCharter";
$this->breadcrumbs=array(
	'OurCharter'=>array('admin'),
);
$data=OurCharter::model()->findAll();
?>
<center>

<?php 
if(count($data)==0)
echo CHtml::link('Add New',array('OurCharter/Create'),array('class'=>'btn btn-primary')); ?>
</center>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'Our-Charter-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
array(
			'class'=>'CButtonColumn',
		),
		'title',
		'sub_title',
		array(        
			'name'=>'block1',
			'value'=>  'substr($data["block1"], 0,100)',
	   ),
		array(
			'name'=>'active',
			'filter'=>array("1"=>"Active","0"=>"Inactive"),
			'value'=>'($data["active"]==1)?"Active":"InActive"',
		),
		
	),
)); ?>
