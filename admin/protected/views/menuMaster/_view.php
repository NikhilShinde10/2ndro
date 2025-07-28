<?php 
/* @var $this MenuMasterController */
/* @var $data MenuMaster */
?>

<div class="view">

	<b><?php  echo CHtml::encode($data->getAttributeLabel('menu_id')); ?>:</b>
	<?php  echo CHtml::link(CHtml::encode($data->menu_id), array('view', 'id'=>$data->menu_id)); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('menu_desc')); ?>:</b>
	<?php  echo CHtml::encode($data->menu_desc); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('menu_url')); ?>:</b>
	<?php  echo CHtml::encode($data->menu_url); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
	<?php  echo CHtml::encode($data->parent_id); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php  echo CHtml::encode($data->active); ?>
	<br />


</div>