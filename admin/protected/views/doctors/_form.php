<?php 
/* @var $this DoctorsController */
/* @var $model Doctors */
/* @var $form CActiveForm */
?>
<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doctors-form',
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
		</div>
		<?php  echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'education'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'education'); ?>
		</div>
		<?php  echo $form->error($model,'education'); ?>
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
		<?php  echo $form->labelEx($model,'interest'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textArea($model,'interest'); ?>
		</div>
		<?php  echo $form->error($model,'interest'); ?>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'specialisation'); ?>
		</div>
		<div class="col-md-10">
		<?php  $service_list = Services::model()->getServiceList();
                        $this->widget('ext.select2.ESelect2',array(
                        'model'=>$model,
                        'attribute'=>'specialisation',
                        'data'=>$service_list,
                        'htmlOptions'=>array(
                        'placeholder'=>'-- Select Status --',
                         'style'=>'width:200px;'       
                        ),
                        )); 
                ?>
		</div>
		<?php  echo $form->error($model,'specialisation'); ?>
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'image'); ?>
		</div>
		<div class="col-md-10">
		<?php echo $form->fileField($model,'image',array()); ?>
		</div>
		<?php  echo $form->error($model,'image'); ?>
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


	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'sort'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'sort'); ?>
		</div>
		<?php  echo $form->error($model,'sort'); ?>
	</div>

	<div class="row buttons">
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- form -->
<script>

CKEDITOR.replace('Doctors_details',
            {   toolbar:'MA'    }
         );
		 CKEDITOR.replace('Doctors_interest',
            {   toolbar:'MA'    }
         );
</script>
