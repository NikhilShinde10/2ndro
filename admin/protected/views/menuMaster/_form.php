<?php 
/* @var $this MenuMasterController */
/* @var $model MenuMaster */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-master-form',
	'enableAjaxValidation'=>false,
)); ?>
<div class="row">
<div class="col-md-6">
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php  echo $form->errorSummary($model); ?>
	<div class="row">
		<div class="col-sm-4 control-label">
		<?php  echo $form->labelEx($model,'parent_id'); ?>
		</div>
		<div class="col-md-6">
		<?php  $data=CHTML::listdata(MenuMaster::model()->findAll(),'menu_id','menu_desc');
                        $this->widget('ext.select2.ESelect2',array(
                        'model'=>$model,
                        'attribute'=>'parent_id',
                        'data'=>array('0'=>'No Parent')+$data,
                        'htmlOptions'=>array(
                        'placeholder'=>'-- Select Menu --',
                         'style'=>'width:200px;',
                         'onchange'=>'check(this)',
                        ),
                        )); 
                ?>
		</div>
		<?php  echo $form->error($model,'parent_id'); ?>
	</div>
	<div class="row">
		<div class="col-sm-4 control-label">
		<?php  echo $form->labelEx($model,'menu_desc'); ?>	
		</div>
		<div class="col-md-6">
		<?php  echo $form->textField($model,'menu_desc'); ?>
		</div>
		<?php  echo $form->error($model,'menu_desc'); ?>
	</div>

	<div class="row">
		<div class="col-sm-4 control-label">
		<?php  echo $form->labelEx($model,'menu_url'); ?>
		</div>
		<div class="col-md-6">
		<?php  echo $form->textField($model,'menu_url'); ?></div>
		<?php  echo $form->error($model,'menu_url'); ?>
	</div>
	<div class="row" id='icon-div'>
		<div class="col-sm-4 control-label">
		<?php  echo $form->labelEx($model,'icon'); ?>
		</div>
		<div class="col-md-6">
		<?php  
                        $this->widget('ext.select2.ESelect2',array(
                        'model'=>$model,
                        'attribute'=>'icon',

                        'data'=>array('fa-user'=>'fa-user','fa-book'=>'fa-book','fa-shopping-cart'=>'fa-shopping-cart','fa-user-plus'=>'fa-user-plus','fa-bank'=>'fa-bank','fa-users'=>'fa-users','fa-file-text'=>'fa-file-text','fa-bars'=>'fa-bars','fa-newspaper-o'=>'fa-newspaper-o','fa-picture-o'=>'fa-picture-o','fa-building'=>'fa-building','fa-phone-square'=>'fa-phone-square','fa-archive'=>'fa-archive','fa-cloud'=>'fa-cloud','fa-paper-plane'=>'fa-paper-plane','fa-cloud-download'=>'fa-cloud-download','fa-gear'=>'fa-gear','fa-pencil-square'=>'fa-pencil-square','fa-bar-chart'=>'fa-bar-chart','fa-users'=>'fa-users','fa-envelope'=>'fa-envelope','fa-map-marker'=>'fa-map-marker','fa-folder-open'=>'fa-folder-open','fa-cogs'=>'fa-cogs','fa-life-ring'=>'fa-life-ring','fa-briefcase'=>'fa-briefcase','fa-graduation-cap'=>'fa-graduation-cap','fa-download'=>'fa-download','fa-globe'=>'fa-globe','fa-pencil'=>'fa-pencil','fa-laptop'=>'fa-laptop','fa-chevron-circle-right'=>'fa-chevron-circle-right','None'=>'None'),
                        'htmlOptions'=>array(
                        'placeholder'=>'-- Select Menu Icon --',
                         'style'=>'width:200px;'       
                        ),
                        )); 
                ?>
		</div>
		<?php  echo $form->error($model,'icon'); ?>
	</div>
	<div class="row">
		<div class="col-sm-4 control-label">
		<?php  echo $form->labelEx($model,'sequence_no'); ?>
		</div>
		<div class="col-md-6">
		<?php  
			if(!$model->isNewRecord)
			{
				$sequence=$model->sequence_no;
			}
			else
			{	
				$sequence=0;	
			}
		echo $form->textField($model,'sequence_no',array('value'=>$sequence)); ?></div>
		<?php  echo $form->error($model,'sequence_no'); ?>
	</div>
	
	

	<div class="row">
		<div class="col-sm-4 control-label">
		<?php  echo $form->labelEx($model,'active'); ?>
		</div>
		<div class="col-md-6">
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
                ?></div>
		<?php  echo $form->error($model,'active'); ?>
	</div>
	
	<div class="row buttons">
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php  $this->endWidget(); ?>
</div>

<div class="col-md-6">
<div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Menu Icons </h5>
                         <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                           
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>

                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Icon Name</th>
                                <th>Icon</th>
                                <th>Icon Name</th>
                                <th>Icon</th>
                           </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>fa-user</td>
                                <td class="text-navy"> <i class="fa fa-user"></i> </td>
                                <td>fa-user-plus</td>
                                <td class="text-navy"> <i class="fa fa-user-plus"></i></td>
                            </tr>
			    <tr>
                                <td>fa-book</td>
                                <td class="text-navy"> <i class="fa fa-book"></i> </td>
                                <td>fa-shopping-cart</td>
                                <td class="text-navy"> <i class="fa fa-shopping-cart"></i></td>
                            </tr>	
                            <tr>
                                <td>fa-bank</td>
                                <td class="text-warning"> <i class="fa fa-bank"></i>  </td>
                                <td>fa-users</td>
                                <td class="text-warning"> <i class="fa fa-users"></i>  </td>
                            </tr>
                            <tr>
                                <td>fa-file-text</td>
                                <td class="text-navy"> <i class="fa fa-file-text"></i> </td>
                                <td>fa-bars</td>
                                <td class="text-navy"> <i class="fa fa-bars"></i></td>
                            </tr>
			    <tr>
                                <td>fa-newspaper-o</td>
                                <td class="text-warning"> <i class="fa fa-newspaper-o"></i>  </td>
                                <td>fa-picture-o</td>
                                <td class="text-warning"> <i class="fa fa-picture-o"></i>  </td>
                            </tr>
                            <tr>
                                <td>fa-building</td>
                                <td class="text-navy"> <i class="fa fa-building"></i> </td>
                                <td>fa-phone-square</td>
                                <td class="text-navy"> <i class="fa fa-phone-square"></i></td>
                            </tr>
			     <tr>
                                <td>fa-archive</td>
                                <td class="text-warning"> <i class="fa fa-archive"></i>  </td>
                                <td>fa-cloud</td>
                                <td class="text-warning"> <i class="fa fa-cloud"></i>  </td>
                            </tr>
                            <tr>
                                <td>fa-paper-plane</td>
                                <td class="text-navy"> <i class="fa fa-paper-plane"></i> </td>
                                <td>fa-cloud-download</td>
                                <td class="text-navy"> <i class="fa fa-cloud-download"></i></td>
                            </tr>
			    <tr>
                                <td>fa-gear</td>
                                <td class="text-warning"> <i class="fa fa-gear"></i>  </td>
                                <td>fa-pencil-square</td>
                                <td class="text-warning"> <i class="fa fa-pencil-square"></i>  </td>
                            </tr>
                            <tr>
                                <td>fa-bar-chart</td>
                                <td class="text-navy"> <i class="fa fa-bar-chart"></i> </td>
                                <td>fa-users</td>
                                <td class="text-navy"> <i class="fa fa-users"></i></td>
                            </tr>
			    <tr>
                                <td>fa-envelope</td>
                                <td class="text-warning"> <i class="fa fa-envelope"></i>  </td>
                                <td>fa-map-marker</td>
                                <td class="text-warning"> <i class="fa fa-map-marker"></i>  </td>
                            </tr>
                            <tr>
                                <td>fa-folder-open</td>
                                <td class="text-navy"> <i class="fa fa-folder-open"></i> </td>
                                <td>fa-cogs</td>
                                <td class="text-navy"> <i class="fa fa-cogs"></i></td>
                            </tr>
			    <tr>
                               
                                <td>fa-life-ring</td>
                                <td class="text-warning"> <i class="fa fa-life-ring"></i>  </td>
				<td>fa-briefcase</td>
                                <td class="text-warning"> <i class="fa fa-briefcase"></i> </td>
                            </tr>
                            <tr>
                                
                                <td>fa-graduation-cap</td>
                                <td class="text-navy"> <i class="fa fa-graduation-cap"></i></td>
				<td>fa-download</td>
                                <td class="text-navy"> <i class="fa fa-download"></i></td>
                            </tr>
			    <tr>
                                
                                <td>fa-globe</td>
                                <td class="text-navy"> <i class="fa fa-globe"></i></td>
				<td>fa-pencil</td>
                                <td class="text-navy"> <i class="fa fa-pencil"></i></td>
                            </tr>
			     <tr>
                                
                                <td>fa-laptop</td>
                                <td class="text-navy"> <i class="fa fa-laptop"></i></td>
                                <td>fa-chevron-circle-right</td>
                                <td class="text-navy"><i class="fa fa-chevron-circle-right"></i></td>
				
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>
</div><!-- form -->

<script>
    $(document).ready(function(){
        var pvalue= document.getElementById('MenuMaster_parent_id').value;
        if(pvalue!=0)
        {
            document.getElementById('icon-div').style.display='none';
        }
    });
function check(cb)
  {
    if(cb.value!=0)
    {
        document.getElementById('icon-div').style.display='none';
    }
  } 
</script>
