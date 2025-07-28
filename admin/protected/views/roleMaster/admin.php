<?php 
/* @var $this RoleMasterController */
/* @var $model RoleMaster */

$this->breadcrumbs=array(
	'Role Master'=>array('admin'),
);

?>
<div class="box  box-solid bg-blue-gradient">
	<div class="box-header">
	 <h1>Role Master</h1>
	 
	</div>
	<div class="box-body no-padding">
	  	
	</div>
	<div class="box-footer text-black">


<h2 class ="actbutton">
	<?php  echo CHtml::button('Create',array('id'=>'crbutton','submit'=>array('RoleMaster/Create'))); ?> 
</h2>
<div class="search-form" style="display:none">
<?php  $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php  $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'role-master-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'role_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?></div></div>
