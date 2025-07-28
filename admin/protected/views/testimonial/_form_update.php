<?php 
/* @var $this TestimonialController */
/* @var $model Testimonial */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'testimonial-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype'=>'multipart/form-data'),	
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php  echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'name'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'name'); ?>
		<?php  echo $form->error($model,'name'); ?>
	    </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'details'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textArea($model,'details'); ?>
		</div>
		<?php  echo $form->error($model,'details'); ?>
	</div>
    <div class="row">
		<div class="col-sm-2 control-label">
		<label> Current Image </label>	
		</div>	
		<div class="col-md-10">
		<?php 
				$path=Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/testimonial/'.$model->logo; 			
				echo CHtml::image($path,' ', array('width'=>'250px'));
		?>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'logo'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->fileField($model,'logo',array()); ?>
		<?php  echo $form->error($model,'logo'); ?>
	</div>
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'active'); ?>
		</div>
		<div class="col-md-10">
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
		<?php  echo $form->error($model,'active'); ?>
	</div>
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'sort'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'sort'); ?>
		<?php  echo $form->error($model,'sort'); ?>
	</div>
	</div>

	<div class="row buttons">
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- form -->
<script>
CKEDITOR.replace('Testimonial_details',
            {   toolbar:'MA'    }
         );
</script>
