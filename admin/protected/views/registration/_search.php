<?php 
/* @var $this CertificationsController */
/* @var $model Certifications */
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
		<?php  echo $form->label($model,'title'); ?>
		<?php  echo $form->textField($model,'title',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'total_no'); ?>
		<?php  echo $form->textField($model,'total_no'); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'created_at'); ?>
		<?php  echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'active'); ?>
		<?php  echo $form->textField($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php  echo CHtml::submitButton('Search'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- search-form -->