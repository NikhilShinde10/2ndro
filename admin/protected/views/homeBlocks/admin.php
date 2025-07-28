<?php
/* @var $this HomeBlocksController */
/* @var $model HomeBlocks */
$this->pageTitle="Home Blocks";
$this->breadcrumbs=array(
	'Home Blocks'=>array('admin'),

);
 $id=Yii::app()->user->getId();		
?>
<div class="box box-info">
    <div class="box-header">
		<h1 class="box-title">
		Manage	Home Blocks		</h1>
      <!-- tools box -->
    </div>
      <div class="row buttons">
	<?php 
	echo CHtml::button('Add New',array('submit'=>array('HomeBlocks/Create'))); ?>
	
</div><br />
<div class="box-footer text-black">
<?php 

	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'HomeBlocks-grid',
	'dataProvider'=>$model->search(),
'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
			'class'=>'CButtonColumn',
		),
		array(
			'name'=>'type',
			'filter'=>array('0'=>'Video','1'=>'Service'),
			'value'=>'getBlockType($data["type"])',
		),
		'title',
		'sub_title',
		'sequence',
		array(
			'name'=>'active',
			'header'=>'Status',
			'value'=>'($data["active"]==1)?"Active":"Inactive"',
		),
	),
));
function getBlockType($id)
{
	if($id==1)
		return "Service";
	else
		return "Video";
}
?>
</div>
</div>
