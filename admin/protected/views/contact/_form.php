<?php 
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php  echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="col-md-2 control-label">
		<?php  echo $form->labelEx($model,'address'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textArea($model,'address',array('class'=>'form-control','rows' => 6, 'style'=>'width:500px')); ?>
		<?php  echo $form->error($model,'address'); ?>
	   </div>
	</div>

	<div class="row">
		<div class="col-md-2 control-label">
		<?php  echo $form->labelEx($model,'email'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php  echo $form->error($model,'email'); ?>
	   </div>
	</div>

	<div class="row">
		<div class="col-md-2 control-label">
		<?php  echo $form->labelEx($model,'phone'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'phone'); ?>
		<?php  echo $form->error($model,'phone'); ?>
		</div>
	</div>

	
	<div class="row buttons">
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- form -->