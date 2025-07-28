<?php

$this->breadcrumbs=array(
	'Users'=>array('admin'),
);

?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'admin_name',
		'admin_email',
		'admin_status',
	),
)); ?>
