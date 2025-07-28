<?php 
/* @var $this HomeSettingController */
/* @var $model HomeSetting */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php  echo $form->label($model,'id'); ?>
		<?php  echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'home_slider_image'); ?>
		<?php  echo $form->textField($model,'home_slider_image',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'home_slider_h1'); ?>
		<?php  echo $form->textField($model,'home_slider_h1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'home_slider_h2'); ?>
		<?php  echo $form->textField($model,'home_slider_h2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'about_us'); ?>
		<?php  echo $form->textField($model,'about_us',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'focus_area'); ?>
		<?php  echo $form->textField($model,'focus_area',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'focus_area_image'); ?>
		<?php  echo $form->textField($model,'focus_area_image',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'our_belief'); ?>
		<?php  echo $form->textField($model,'our_belief',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'our_belief_image'); ?>
		<?php  echo $form->textField($model,'our_belief_image',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'copyright'); ?>
		<?php  echo $form->textField($model,'copyright',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'team_image'); ?>
		<?php  echo $form->textField($model,'team_image',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'portfolio_image'); ?>
		<?php  echo $form->textField($model,'portfolio_image',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'media_image'); ?>
		<?php  echo $form->textField($model,'media_image',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php  echo CHtml::submitButton('Search'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- search-form -->