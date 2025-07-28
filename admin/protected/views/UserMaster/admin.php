<?php
$this->breadcrumbs=array(
	'Users'=>array('admin'),
);

?>
<center>
	      	<?php  echo CHtml::button('Add User',array('submit'=>array('UserMaster/create'))); ?>
</center>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'admin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn',
		),
		'admin_name',
		'admin_email',
		'admin_status',
		
	),
)); ?>
