<?php
/* @var $this SeoDataController */
/* @var $model SeoData */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('class'=>'form-control','style'=>'width:200px')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu'); ?>
		<?php echo $form->textField($model,'menu',array('class'=>'form-control','style'=>'width:200px')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title',array('class'=>'form-control','style'=>'width:200px')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_keyword'); ?>
		<?php echo $form->textField($model,'meta_keyword',array('class'=>'form-control','style'=>'width:200px')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_description'); ?>
		<?php echo $form->textField($model,'meta_description',array('class'=>'form-control','style'=>'width:200px')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('class'=>'form-control','style'=>'width:200px')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->