<?php 
/* @var $this DoctorsController */
/* @var $model Doctors */
$this->pageTitle="Doctors";
$this->breadcrumbs=array(
	'Doctors'=>array('admin'),

);


?>
<center>

<?php  echo CHtml::link('Add New',array('Doctors/Create'),array('class'=>'btn btn-primary')); ?>
</center>
<?php  $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'doctors-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn',
		),
		'name',
		'education',
/*
		'details',*/
		array(        

                     'name'=>'details',
                     'value'=>  'strip_tags($data["details"], "<br>")',
                ),
		array(
			'name'=>'active',
			'header'=>'Active',
'filter'=>array("1"=>"Active","0"=>"Inactive"),
			'value'=>'($data["active"]==1)?"Active":"InActive"',
		),
		/*
		'created_date',
		'facebook',
		'twitter',
		'linkedin',
		'sort',
		*/
		
	),
));

function getteamtype($id)
{
	if($id==1)
		return "CORE TEAM";
	else if($id==2)
		return "ADVISORY BOARD";
	else if($id==3)
		return "TEAM MENTORS";
}

 ?>
