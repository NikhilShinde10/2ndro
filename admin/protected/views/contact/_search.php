<?php 
/* @var $this ContactController */
/* @var $model Contact */
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
		<?php  echo $form->label($model,'address'); ?>
		<?php  echo $form->textField($model,'address',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'lattitude'); ?>
		<?php  echo $form->textField($model,'lattitude'); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'longitude'); ?>
		<?php  echo $form->textField($model,'longitude'); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'email'); ?>
		<?php  echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'phone'); ?>
		<?php  echo $form->textField($model,'phone'); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'facebook'); ?>
		<?php  echo $form->textField($model,'facebook',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'linkedin'); ?>
		<?php  echo $form->textField($model,'linkedin',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'twitter'); ?>
		<?php  echo $form->textField($model,'twitter',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php  echo $form->label($model,'created_date'); ?>
		<?php  echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row buttons">
		<?php  echo CHtml::submitButton('Search'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- search-form -->