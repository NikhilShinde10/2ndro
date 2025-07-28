

<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'AboutUs-form',
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
		<?php  echo $form->textField($model,'title',array('size'=>60)); ?>
		</div>
		<?php  echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<div class="col-sm-2 control-label">
		<?php  echo $form->labelEx($model,'sub_title'); ?>
		</div>
		<div class="col-md-10">
		<?php  echo $form->textField($model,'sub_title'); ?>
		</div>
		<?php  echo $form->error($model,'sub_title'); ?>
	</div>
    
	<div class="row">
		<div class="col-sm-2 control-label">
		<label> Current Banner </label>	
		</div>	
		<div class="col-md-10">
		<?php 
				$ext = explode(".",$model->banner);
				$ext = end($ext);
				$filen=$model->id."-AboutUs.".$ext;
				$path=Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/AboutUs/'.$model->banner; 			
				echo CHtml::image($path,' ', array('width'=>'250px'));
		?>
		</div>	
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
		<label> Current Image </label>	
		</div>	
		<div class="col-md-10">
		<?php 
				$ext1 = explode(".",$model->image);
				$ext1 = end($ext1);
				$filen1=$model->id."-AboutUs-image.".$ext;
				$path1=Yii::app()->baseurl.DIRECTORY_SEPARATOR.'uploads/AboutUs/'.$model->image; 			
				echo CHtml::image($path1,' ', array('width'=>'250px'));
		?>
		</div>	
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
		<?php echo $form->textArea($model,'block1',array('style'=>'width:100%','rows' => 6)); ?>
		</div>
		<?php echo $form->error($model,'block1'); ?>
	</div>
	<div class="row">
		<div class="col-lg-2">
		<?php echo $form->labelEx($model,'paragraph'); ?>
		</div>
		<div class="col-lg-10">
		<?php echo $form->textArea($model,'paragraph',array('style'=>'width:100%','rows' => 6)); ?>
		</div>
		<?php echo $form->error($model,'paragraph'); ?>
	</div>
	<div class="row">
		<div class="col-lg-2">
		<?php echo $form->labelEx($model,'block2'); ?>
		</div>
		<div class="col-lg-10">
		<?php echo $form->textArea($model,'block2',array('style'=>'width:100%','rows' => 6)); ?>
		</div>
		<?php echo $form->error($model,'block2'); ?>
	</div>
	<div class="row buttons">
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php  $this->endWidget(); ?>

</div><!-- form -->
<script>
CKEDITOR.replace('AboutUs_block1',
            {   toolbar:'MA'    }
         );

		 CKEDITOR.replace('AboutUs_block2',
            {   toolbar:'MA'    }
         );
</script>
