
<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blog-form',
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
		<?php  echo $form->labelEx($model,'category'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'category'); ?>
		</div>
		<?php  echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'author'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'author'); ?>
		</div>
		<?php  echo $form->error($model,'author'); ?>
	</div>
	<div class="row">
		<div class="col-lg-2">
		<?php echo $form->labelEx($model,'description'); ?>
		</div>
		<div class="col-lg-10">
		<?php echo $form->textArea($model,'description',array('style'=>'width:100%','rows' => 6,'maxlength'=>500)); ?>
		</div>
		<?php echo $form->error($model,'description'); ?>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
			<?php  echo $form->labelEx($model,'logo'); ?>
		</div>
		<div class="col-md-10">
			<?php  echo $form->fileField($model,'logo',array()); ?>
		</div>
		<?php  echo $form->error($model,'logo'); ?>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'date'); ?>
		</div>
		<div class="col-md-10">
		<?php  
			$form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'name'=>'date',
		        'attribute'=>'date',
  			'options'=>array(
    			'showAnim'=>'fold',
    			'showButtonPanel'=>true,
    			'autoSize'=>true,
    			'dateFormat'=>'dd-mm-yy',
			'changeYear'=>true,
			'changeMonth'=>true,
   			)));
		?>
		</div>
		<?php  echo $form->error($model,'date'); ?>
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
CKEDITOR.replace('Blog_description',
            {   toolbar:'MA'    }
         );
</script>
