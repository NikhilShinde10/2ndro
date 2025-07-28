<?php 
/* @var $this ManagementProfilesController */
/* @var $model ManagementProfiles */
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
		<?php  echo $form->label($model,'name'); ?>
		<?php  echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'designation'); ?>
		<?php  echo $form->textField($model,'designation',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'image'); ?>
		<?php  echo $form->textField($model,'image',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'details'); ?>
		<?php  echo $form->textField($model,'details',array('size'=>60,'maxlength'=>4000)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'active'); ?>
		<?php  echo $form->textField($model,'active'); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'created_date'); ?>
		<?php  echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'facebook'); ?>
		<?php  echo $form->textField($model,'facebook',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'twitter'); ?>
		<?php  echo $form->textField($model,'twitter',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'linkedin'); ?>
		<?php  echo $form->textField($model,'linkedin',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'sort'); ?>
		<?php  echo $form->textField($model,'sort'); ?>
	</div>

	<div class="row buttons">
		<?php  echo CHtml::submitButton('Search'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- search-form -->