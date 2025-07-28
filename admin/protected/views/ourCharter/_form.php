
<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'our-charter-form',
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
		<?php  echo $form->labelEx($model,'sub_title'); ?>
		</div>
		<div class="col-md-10">
		<?php echo $form->textArea($model,'sub_title',array('style'=>'width:100%','rows' => 6,'maxlength'=>500)); ?>
		</div>
		<?php  echo $form->error($model,'sub_title'); ?>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
			<?php  echo $form->labelEx($model,'banner'); ?>
		</div>
		<div class="col-md-10">
			<?php  echo $form->fileField($model,'banner',array()); ?>
		</div>
		<?php  echo $form->error($model,'banner'); ?>
	</div>
	
	<div class="row">
		<div class="col-sm-2 control-label">
			<?php  echo $form->labelEx($model,'image'); ?>
		</div>
		<div class="col-md-10">
			<?php  echo $form->fileField($model,'image',array()); ?>
		</div>
		<?php  echo $form->error($model,'image'); ?>
	</div>
	
	<div class="row">
		<div class="col-lg-2">
		<?php echo $form->labelEx($model,'block1'); ?>
		</div>
		<div class="col-lg-10">
		<?php echo $form->textArea($model,'block1',array('style'=>'width:100%','rows' => 6,'maxlength'=>500)); ?>
		</div>
		<?php echo $form->error($model,'block1'); ?>
	</div>
	<div class="row">
		<div class="col-lg-2">
		<?php echo $form->labelEx($model,'block2'); ?>
		</div>
		<div class="col-lg-10">
		<?php echo $form->textArea($model,'block2',array('style'=>'width:100%','rows' => 6,'maxlength'=>500)); ?>
		</div>
		<?php echo $form->error($model,'block2'); ?>
	</div>
	
	
	<div class="row buttons">
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- form -->
<script>
CKEDITOR.replace('OurCharter_block1',
            {   toolbar:'MA'    }
         ); 
		 CKEDITOR.replace('OurCharter_block2',
            {   toolbar:'MA'    }
         );
</script>
