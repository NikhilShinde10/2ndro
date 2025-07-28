<?php 
/* @var $this HomeSettingController */
/* @var $data HomeSetting */
?>

<div class="view">

	<b><?php  echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php  echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('home_slider_image')); ?>:</b>
	<?php  echo CHtml::encode($data->home_slider_image); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('home_slider_h1')); ?>:</b>
	<?php  echo CHtml::encode($data->home_slider_h1); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('home_slider_h2')); ?>:</b>
	<?php  echo CHtml::encode($data->home_slider_h2); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('about_us')); ?>:</b>
	<?php  echo CHtml::encode($data->about_us); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('focus_area')); ?>:</b>
	<?php  echo CHtml::encode($data->focus_area); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('focus_area_image')); ?>:</b>
	<?php  echo CHtml::encode($data->focus_area_image); ?>
	<br />

	<?php  /*
	<b><?php  echo CHtml::encode($data->getAttributeLabel('our_belief')); ?>:</b>
	<?php  echo CHtml::encode($data->our_belief); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('our_belief_image')); ?>:</b>
	<?php  echo CHtml::encode($data->our_belief_image); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('copyright')); ?>:</b>
	<?php  echo CHtml::encode($data->copyright); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('team_image')); ?>:</b>
	<?php  echo CHtml::encode($data->team_image); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('portfolio_image')); ?>:</b>
	<?php  echo CHtml::encode($data->portfolio_image); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('media_image')); ?>:</b>
	<?php  echo CHtml::encode($data->media_image); ?>
	<br />

	*/ ?>

</div>