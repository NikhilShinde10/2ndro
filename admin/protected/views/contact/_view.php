<?php 
/* @var $this ContactController */
/* @var $data Contact */
?>

<div class="view">

	<b><?php  echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php  echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php  echo CHtml::encode($data->address); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('lattitude')); ?>:</b>
	<?php  echo CHtml::encode($data->lattitude); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php  echo CHtml::encode($data->longitude); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php  echo CHtml::encode($data->email); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php  echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('facebook')); ?>:</b>
	<?php  echo CHtml::encode($data->facebook); ?>
	<br />

	<?php  /*
	<b><?php  echo CHtml::encode($data->getAttributeLabel('linkedin')); ?>:</b>
	<?php  echo CHtml::encode($data->linkedin); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('twitter')); ?>:</b>
	<?php  echo CHtml::encode($data->twitter); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php  echo CHtml::encode($data->created_date); ?>
	<br />

	*/ ?>

</div>