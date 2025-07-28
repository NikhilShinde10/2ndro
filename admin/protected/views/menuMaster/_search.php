<?php 
/* @var $this MenuMasterController */
/* @var $model MenuMaster */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php  echo $form->label($model,'menu_id'); ?>
		<?php  echo $form->textField($model,'menu_id'); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'menu_desc'); ?>
		<?php  echo $form->textField($model,'menu_desc',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'menu_url'); ?>
		<?php  echo $form->textField($model,'menu_url',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'parent_id'); ?>
		<?php  echo $form->textField($model,'parent_id'); ?>
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