<?php
/* @var $this KlickAdminController */
/* @var $data KlickAdmin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->admin_id), array('view', 'id'=>$data->admin_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_name')); ?>:</b>
	<?php echo CHtml::encode($data->admin_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_displayName')); ?>:</b>
	<?php echo CHtml::encode($data->admin_displayName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_password')); ?>:</b>
	<?php echo CHtml::encode($data->admin_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_email')); ?>:</b>
	<?php echo CHtml::encode($data->admin_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_status')); ?>:</b>
	<?php echo CHtml::encode($data->admin_status); ?>
	<br />


</div>