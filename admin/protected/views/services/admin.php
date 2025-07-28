<?php 
$this->pageTitle="Services";
$this->breadcrumbs=array(
	'Services'=>array('admin'),
);

?>
<center>

<?php  echo CHtml::link('Add New',array('Services/Create'),array('class'=>'btn btn-primary')); ?>
</center>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'Services-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
array(
			'class'=>'CButtonColumn',
		),
		'title',
		array(  
                     'name'=>'description',
                     'value'=>  'substr($data["description"],0,500)'

                ),	
		array(
			'name'=>'active',
			'filter'=>array("1"=>"Active","0"=>"Inactive"),
			'value'=>'($data["active"]==1)?"Active":"InActive"',
		),
		'sort',
	
	),
)); ?>
