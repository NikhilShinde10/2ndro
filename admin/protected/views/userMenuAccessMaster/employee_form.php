<?php 
	$this->breadcrumbs = array('Manage Access'=>array('UserMenuAccessMaster/Admin')); 
	$this->pageTitle   = "Manage Access";
?>
<div class="wide form">
<?php  $form = $this->beginWidget('CActiveForm', array(
				'id'=>'menu-master-form',
				'enableAjaxValidation'=>false,
			));
?>
	<div class="form-group" >
		<?php  echo $form->labelEx($model,'role_id'); ?>
		<?php  $user_list = RoleMaster::model()->getRoleList();
			$this->widget('ext.select2.ESelect2',array(
		                'model'=>$model,
		                'attribute'=>'admin_id',
		                'data'=>$user_list,
				'options'=>array(
						    'placeholder'=>'-- Select Role--',
						    'allowClear'=>true,
						  ),
		                 'htmlOptions'=>array( 
								'style'=>'width:230px',
							  
		               			 ),
		                )); 
		      ?>
			<?php  echo $form->error($model,'role'); ?>
	</div>

<br />
<div class="row buttons">
	<?php  echo CHtml::submitButton('Manage Access',array("name"=>'manage_access')); ?>
</div>
   <?php  $this->endWidget(); ?>
</div><!-- form -->
