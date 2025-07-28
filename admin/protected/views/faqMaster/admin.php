<?php
/* @var $this FaqMasterController */
/* @var $model FaqMaster */
$this->pageTitle="Faq Master";
$this->breadcrumbs=array(
	'Faq Master'=>array('admin'),

);
 $id=Yii::app()->user->getId();		
?>
<div class="box box-info">
    <div class="box-header">
		<h1 class="box-title">
		Manage	FAQ		</h1>
      <!-- tools box -->
    </div>
      <div class="row buttons">
	<?php 
	echo CHtml::button('Add New',array('submit'=>array('FaqMaster/Create'))); ?>
	
</div><br />
<div class="box-footer text-black">
<?php 

	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'faq-master-grid',
	'dataProvider'=>$model->search(),
'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
			'class'=>'CButtonColumn',
		),
		array(
			'name'=>'type',
			'filter'=>array('0'=>'FAQ','1'=>'About Us','2'=>'Why Us'),
			'value'=>'getFaqType($data["type"])',
		),
		'title',
		 array(        
			'name'=>'details',
			'value'=>  'substr($data["details"], 0,100)',
	   ),
		'sequence',
		array(
			'name'=>'active',
			'header'=>'Status',
			'value'=>'($data["active"]==1)?"Active":"Inactive"',
		),
	),
));
function getFaqType($id)
{
	if($id==1)
		return "About Us";
	else if($id==2)
		return "Why Us";
	else
		return "FAQ";
}
?>
</div>
</div>
