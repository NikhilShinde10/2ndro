<?php
/* @var $this FaqMasterController */
/* @var $model FaqMaster */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faq-master-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
		'htmlOptions' => array('enctype'=>'multipart/form-data'),	
)); 
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>
	<div class="row form-group">
		<div class="col-lg-3">
		<?php echo $form->labelEx($model,'type'); ?>
		</div>
		<div class="col-lg-9">
		<?php 
                        $this->widget('ext.select2.ESelect2',array(
                        'model'=>$model,
                        'attribute'=>'type',
                        'data'=>array('0'=>'FAQ','1'=>'About Us','2'=>'Why Us'),
                        'htmlOptions'=>array(
                        'placeholder'=>'-- Select Status --',
                         'style'=>'width:200px;'       
                        ),
                        )); 
                ?>
		</div>
		<?php echo $form->error($model,'type'); ?>
	</div>
	<div class="row form-group">
		<div class="col-lg-3">
		<?php echo $form->labelEx($model,'title'); ?>
		</div>
		<div class="col-lg-9">
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200)); ?>
		</div>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row form-group">
		<div class="col-lg-3">
		<?php echo $form->labelEx($model,'details'); ?>
		</div>
		<div class="col-lg-9">
		<?php echo $form->textArea($model,'details',array('style'=>'width:100%','rows' => 6,'maxlength'=>500)); ?>
		</div>
		<?php echo $form->error($model,'details'); ?>
	</div>
	
	<div class="row form-group">
		<div class="col-lg-3">
		<?php echo $form->labelEx($model,'sequence'); ?>
		</div>
		<div class="col-lg-9">
		<?php  echo $form->textField($model,'sequence'); ?>
		</div>
		<?php echo $form->error($model,'sequence'); ?>
	</div>
	<div class="row form-group">
		<div class="col-lg-3">
		<?php echo $form->labelEx($model,'active'); ?>
		</div>
		<div class="col-lg-9">
		<?php 
                        $this->widget('ext.select2.ESelect2',array(
                        'model'=>$model,
                        'attribute'=>'active',
                        'data'=>array('0'=>'Inactive','1'=>'Active'),
                        'htmlOptions'=>array(
                        'placeholder'=>'-- Select Status --',
                         'style'=>'width:200px;'       
                        ),
                        )); 
                ?>
		</div>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
CKEDITOR.replace('FaqMaster_details',
            {   toolbar:'MA'    }
         );
</script>
