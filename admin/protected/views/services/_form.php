

<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Testimonial-form',
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
		<?php  echo $form->labelEx($model,'title'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'title',array('size'=>60,'maxlength'=>500)); ?>
		</div>
		<?php  echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'description'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textArea($model,'description',array('class'=>'form-control','rows' => 6, 'style'=>'width:500px')); ?>
		</div>
		<?php  echo $form->error($model,'description'); ?>
	</div>
	
	<div class="row">
		<div class="col-sm-2 control-label">
			<?php  echo $form->labelEx($model,'sort'); ?>
		</div>
		<div class="col-md-10">
			<?php  echo $form->textField($model,'sort'); ?>
		</div>
		<?php  echo $form->error($model,'sort'); ?>
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
		</div>
		<?php  echo $form->error($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- form -->
<script>
CKEDITOR.replace('Services_description',
            {   toolbar:'MA'    }
         ); 
</script>