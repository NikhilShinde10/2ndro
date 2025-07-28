<?php 
/* @var $this PrivacyPolicyController */
/* @var $model PrivacyPolicy */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'policy-master-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'title'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'title',array('size'=>60,'maxlength'=>500)); ?>
		<?php  echo $form->error($model,'title'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'type'); ?>
		</div>
		<div class="col-md-10">
		<?php  
                        $this->widget('ext.select2.ESelect2',array(
                        'model'=>$model,
                        'attribute'=>'type',
                        'data'=>array('0'=>'Privacy Policy','1'=>'Terms & Condition','2'=>'Cookie Policy','3'=>'Refund Policy'),
                        'htmlOptions'=>array(
                        'placeholder'=>'-- Select Type --',
                         'style'=>'width:200px;'       
                        ),
                        )); 
                ?>
				<?php  echo $form->error($model,'type'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-2">
		<?php echo $form->labelEx($model,'details'); ?>
		</div>
		<div class="col-lg-10">
		<?php echo $form->textArea($model,'details',array('style'=>'width:100%','rows' => 6,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'details'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
			<?php  echo $form->labelEx($model,'status'); ?>
		</div>
		<div class="col-md-10">
		<?php  
                        $this->widget('ext.select2.ESelect2',array(
                        'model'=>$model,
                        'attribute'=>'status',
                        'data'=>array('0'=>'Inactive','1'=>'Active'),
                        'htmlOptions'=>array(
                        'placeholder'=>'-- Select Status --',
                         'style'=>'width:200px;'       
                        ),
                        )); 
                ?>
				<?php  echo $form->error($model,'status'); ?>
		</div>
	</div>

	<div class="row buttons">
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- form -->
<script>
CKEDITOR.replace('PrivacyPolicy_details',
            {   toolbar:'MA'    }
         );
</script>
