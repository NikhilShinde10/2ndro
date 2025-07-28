<?php
/* @var $this SliderMasterController */
/* @var $data SliderMaster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slider_heading')); ?>:</b>
	<?php echo CHtml::encode($data->slider_heading); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slider_description')); ?>:</b>
	<?php echo CHtml::encode($data->slider_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slider_image')); ?>:</b>
	<?php echo CHtml::encode($data->slider_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />


</div>