<?php 
/* @var $this HomeSettingController */
/* @var $model HomeSetting */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'home-setting-form',
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
		<?php  echo $form->labelEx($model,'logo'); ?>
		</div>
		<div class="col-md-10">
		<?php echo $form->fileField($model,'logo',array()); ?>
		<?php  echo $form->error($model,'logo'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'tagline'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'tagline',array('size'=>60,'maxlength'=>100)); ?>
		<?php  echo $form->error($model,'tagline'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'home_slider_image'); ?>
		</div>
		<div class="col-md-10">
		<?php echo $form->fileField($model,'home_slider_image',array()); ?>
		<?php  echo $form->error($model,'home_slider_image'); ?>
		 </div>
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'home_slider_h1'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'home_slider_h1',array('size'=>60,'maxlength'=>100)); ?>
		<?php  echo $form->error($model,'home_slider_h1'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'home_slider_subtitle1'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'home_slider_subtitle1',array('size'=>60)); ?>
		<?php  echo $form->error($model,'home_slider_subtitle1'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'home_slider_image1'); ?>
		</div>
		<div class="col-md-10">
		<?php echo $form->fileField($model,'home_slider_image1',array()); ?>
		<?php  echo $form->error($model,'home_slider_image1'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'home_slider_h2'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'home_slider_h2',array('size'=>60,'maxlength'=>100)); ?>
		<?php  echo $form->error($model,'home_slider_h2'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'home_slider_subtitle2'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'home_slider_subtitle2',array('size'=>60)); ?>
		<?php  echo $form->error($model,'home_slider_subtitle2'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'about_title'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'about_title',array('size'=>60,'maxlength'=>100)); ?>
		<?php  echo $form->error($model,'about_title'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'about_us'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textArea($model,'about_us',array('class'=>'form-control','rows' => 5, 'style'=>'width:100%')); ?>
		<?php  echo $form->error($model,'about_us'); ?>
	   </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'about_area_image'); ?>
		</div>
		<div class="col-md-10">
		<?php echo $form->fileField($model,'about_area_image',array()); ?>
		<?php  echo $form->error($model,'about_area_image'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'focus_title'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'focus_title',array('size'=>60,'maxlength'=>100)); ?>
		<?php  echo $form->error($model,'focus_title'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'focus_area'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textArea($model,'focus_area',array('class'=>'form-control','rows' => 5, 'style'=>'width:100%')); ?>
		<?php  echo $form->error($model,'focus_area'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'service_title'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'service_title',array('size'=>60,'maxlength'=>100)); ?>
		<?php  echo $form->error($model,'service_title'); ?>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'service_area'); ?>
		</div>
		<div class="col-md-10">
			<?php  echo $form->textArea($model,'service_area',array('class'=>'form-control','rows' => 5, 'style'=>'width:100%')); ?>
		<?php  echo $form->error($model,'service_area'); ?>
		 </div>
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'service_image'); ?>
		</div>
		<div class="col-md-10">
		<?php echo $form->fileField($model,'service_image',array()); ?>
		<?php  echo $form->error($model,'service_image'); ?>
		 </div>
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'copyright'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'copyright',array('size'=>50,'maxlength'=>50)); ?>
		<?php  echo $form->error($model,'copyright'); ?>
	    </div>
	</div>
	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'emergancy_block'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'emergancy_block',array('size'=>50)); ?>
		<?php  echo $form->error($model,'emergancy_block'); ?>
	    </div>
	</div>
	<div class="row buttons">
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- form -->

<script>
CKEDITOR.replace('HomeSetting_about_us',
            {   toolbar:'MA'    }
         );
CKEDITOR.replace('HomeSetting_focus_area',
            {   toolbar:'MA'    }
         );
CKEDITOR.replace('HomeSetting_service_area',
            {   toolbar:'MA'    }
         );
</script>