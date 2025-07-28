<?php 
/* @var $this RoleMasterController */
/* @var $data RoleMaster */
?>

<div class="view">

	<b><?php  echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php  echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('details')); ?>:</b>
	<?php  echo CHtml::encode($data->details); ?>
	<br />


</div>