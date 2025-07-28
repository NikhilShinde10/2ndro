<?php 
$this->pageTitle="Blog";
$this->breadcrumbs=array(
	'Blog'=>array('admin'),
);

?>
<center>

<?php  echo CHtml::link('Add New',array('Blog/Create'),array('class'=>'btn btn-primary')); ?>
</center>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'Blog-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
array(
			'class'=>'CButtonColumn',
		),
		'title',
		'category',
		array(
			'name'=>'date',
			'header'=>'Date',
			'value'=>'($data["date"]!="0000-00-00")?date_format(date_create($data["date"]), "d-m-Y "):"NA"',
		),
		array(
			'name'=>'active',
			'filter'=>array("1"=>"Active","0"=>"Inactive"),
			'value'=>'($data["active"]==1)?"Active":"InActive"',
		),
		
	),
)); ?>
