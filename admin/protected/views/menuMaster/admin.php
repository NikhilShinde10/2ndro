<?php 
/* @var $this MenuMasterController */
/* @var $model MenuMaster */

$this->breadcrumbs=array(
	'Menu Master'=>array('admin'),
	
);
$this->pageTitle="Menu Master";
?>
<div class="box box-info">
    <div class="box-header">
		<h1 class="box-title">
		Manage	Menu</h1>
      <!-- tools box -->
    </div>
      <div class="row buttons">
	<?php 
	echo CHtml::button('Add New',array('submit'=>array('MenuMaster/Create'))); ?>
	
</div><br />
<div class="box-footer text-black">
<?php  
$criteria=new CDbCriteria;
$criteria->compare('menu_url','javascript:void(0)');
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'menu-master-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn',
		),
		//'menu_id',
		'menu_desc',
		array(
			'name'=>'menu_url',
			'value'=>'($data->menu_url!="javascript:void(0)")?$data->menu_url:""',
		),
		array(
			'name'=>'parent_id',
			'value'=>'($data->parent_id!=0)?$data->ParentMenu->menu_desc:"No Parent"',
			'filter'=>CHTML::listdata(MenuMaster::model()->findAll($criteria),'menu_id','menu_desc'),
		),
	//'icon',
		array(
			'name'=>'icon',
			'value'=>'getIcon($data["icon"])',
		),
		array(
			'name'=>'active',
			'value'=>'($data->active!=0)?"Active":"Inactive"',
			'filter'=>array('0'=>'Inactive','1'=>'Active'),
		),
		
	),
));
function getIcon($icon)
{
if($icon!="")
	echo "<i class='fa $icon'></i>";
else
	echo "NA";
 }
 ?>
 </div>
</div>

