<?php 
/* @var $this ManagementProfilesController */
/* @var $data ManagementProfiles */
?>

<div class="view">

	<b><?php  echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php  echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php  echo CHtml::encode($data->name); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('designation')); ?>:</b>
	<?php  echo CHtml::encode($data->designation); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php  echo CHtml::encode($data->image); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('details')); ?>:</b>
	<?php  echo CHtml::encode($data->details); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php  echo CHtml::encode($data->active); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php  echo CHtml::encode($data->created_date); ?>
	<br />

	<?php  /*
	<b><?php  echo CHtml::encode($data->getAttributeLabel('facebook')); ?>:</b>
	<?php  echo CHtml::encode($data->facebook); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('twitter')); ?>:</b>
	<?php  echo CHtml::encode($data->twitter); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('linkedin')); ?>:</b>
	<?php  echo CHtml::encode($data->linkedin); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php  echo CHtml::encode($data->sort); ?>
	<br />

	*/ ?>

</div>