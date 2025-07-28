<?php 
/* @var $this PartnersController */
/* @var $data Partners */
?>

<div class="view">

	<b><?php  echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php  echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php  echo CHtml::encode($data->logo); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php  echo CHtml::encode($data->active); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php  echo CHtml::encode($data->sort); ?>
	<br />


</div>