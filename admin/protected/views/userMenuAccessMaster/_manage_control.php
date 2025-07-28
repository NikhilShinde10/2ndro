<?php 
	$this->pageTitle="Manage Access";
	$this->breadcrumbs=array(
	'Manage Access'=>array('admin'),
	);
?>
<style>
	th input[type=checkbox]{margin-left: 5%}
</style>
<div class="wide form">
	<div class="row">
		<div class="col-md-9">   
			<?php 
				$form=$this->beginWidget('CActiveForm', array(
					'id'=>'unit-progress-log-form',
					'action'=>Yii::app()->createUrl('UserMenuAccessMaster/manageAccess'),
					'enableAjaxValidation'=>false,
				));
			?>
				<input type="hidden" name="role_id"value="<?php  echo $role_id?>" />
			<?php  
				$ispresent=UserMenuAccessMaster::model()->findAll(array('condition'=>"user=$role_id"));
				$emp=UserMaster::model()->findByPk($role_id);
				//$employee=EmployeeMaster::model()->findByPk($emp['employee_name']);

				if($ispresent==null)
				{ 

				echo "<div id='indirect-issue-grid' class='grid-view'>
				<table class='items'>
						<thead>
						<tr>
							<th>Menu Name</th>
<th>Menu Access<input type='checkbox' id='allcb' name='allcb'/> </th></tr></thead>
						<tbody>";
/*<th>Update<input type='checkbox' id='allcb2' name='allcb2'/> </th>
<th>Delete<input type='checkbox' id='allcb3' name='allcb3'/> </th>
<th>View<input type='checkbox' id='allcb4' name='allcb4'/> </th>*/
						
		$menulist="";
			$query="select menu_id,menu_desc,'0' as access,'0' as create_action,'0' as update_action,'0' as delete_action,'0' as view_action,menu_url,sequence_no from menu_master where parent_id=0 and active=1 order by sequence_no asc";      						
					$command=Yii::app()->db->createCommand($query);
					$user=$command->queryAll();
					$command=Yii::app()->db->createCommand($query);
					$user=$command->queryAll();

					foreach($user as $parentModel)
					{
$menulist.=MenuMaster::model()->CreateMenulist($role_id,$parentModel['access'],$parentModel['create_action'],$parentModel['update_action'],$parentModel['delete_action'],$parentModel['view_action'],$parentModel['menu_id'], $parentModel['menu_desc'], $parentModel['menu_url'],$parentModel,0);
					}
print_r($menulist);					
					echo "</tbody></table></div>";

				}
				else
				{
				echo "<div id='indirect-issue-grid' class='grid-view'>
				<table class='items'>
						<thead>
						<tr>
							<th>Menu Name</th>
							<th>Menu Access<input type='checkbox' id='allcb' name='allcb'/> </th></tr></thead>
						<tbody>";
/*<th>Update<input type='checkbox' id='allcb2' name='allcb2'/> </th>
<th>Delete<input type='checkbox' id='allcb3' name='allcb3'/> </th>
<th>View<input type='checkbox' id='allcb4' name='allcb4'/> </th>*/


						
		$menulist="";
					$query="select m.menu_id,m.menu_desc,m.menu_url,u.access,u.create_action,u.update_action,u.delete_action,u.view_action,m.sequence_no from menu_master m, user_menu_access_master u where u.user=$role_id AND u.menu=m.menu_id and m.parent_id=0 and m.active=1 union 
select m.menu_id,m.menu_desc,m.menu_url,'0' as access,'0' as create_action,'0' as update_action,'0' as delete_action,'0' as view_action,sequence_no from menu_master m where m.menu_id NOT IN(select menu from user_menu_access_master where user=$role_id) and m.parent_id=0 and m.active=1 order by sequence_no asc";
					$command=Yii::app()->db->createCommand($query);
					$user=$command->queryAll();

					foreach($user as $parentModel)
					{
$menulist.=MenuMaster::model()->CreateMenulist($role_id,$parentModel['access'],$parentModel['create_action'],$parentModel['update_action'],$parentModel['delete_action'],$parentModel['view_action'],$parentModel['menu_id'], $parentModel['menu_desc'], $parentModel['menu_url'],$parentModel,1);
					}
print_r($menulist);					
					echo "</tbody></table></div>";

				}
				/*$dataProvider = new CArrayDataProvider($user, array('keyField'=>'menu_id'));
				$dataProvider->setPagination(false);
				$this->widget('EScrollableGridView', array(
					'id'=>'something',
					'height' => '50', 
					'width' => '500',
					'flush' => false,
					'dataProvider'=>$dataProvider,
						'columns'=>array(
							array(
								'name'=>'menu_desc',
								'header'=>'Menu Name',
								'value'=>'$data["menu_desc"]',
							),
							array(
								'class'=>'CCheckBoxColumn',
								'id'=>'acc',
								'selectableRows'=>'2',	
								'checked'=>'$data["access"]',
							),
						),
					));*/
				  ?>
				<?php  //echo CHtml::submitButton('Save',array('name'=>'save')); ?>
				<?php  //$this->endWidget(); ?>

		</div><!-- col-md-7 -->
		<div class="col-md-7">
			<?php  echo CHtml::submitButton('Save',array('name'=>'save')); ?>
			<?php  //echo CHtml::button('Save', array('submit' => array('UserMenuAccessMaster/manageAccess'))); ?>
		</div>
<?php  $this->endWidget(); ?>
	</div><!-- row-->
</div><!-- form-->
<style>
.col-md-7
{
	overflow:auto;
	height:350px;
}
</style>
<script>
$('#allcb').change(function(){
    if($(this).prop('checked')){
        $('tbody tr td#access1 input[type="checkbox"]').each(function(){
            $(this).prop('checked', true);
        });
    }else{
        $('tbody tr td#access1 input[type="checkbox"]').each(function(){
            $(this).prop('checked', false);
        });
    }
});
$('#allcb1').change(function(){
    if($(this).prop('checked')){
        $('tbody tr td#access2 input[type="checkbox"]').each(function(){
            $(this).prop('checked', true);
        });
    }else{
        $('tbody tr td#access2 input[type="checkbox"]').each(function(){
            $(this).prop('checked', false);
        });
    }
});
$('#allcb2').change(function(){
    if($(this).prop('checked')){
        $('tbody tr td#access3 input[type="checkbox"]').each(function(){
            $(this).prop('checked', true);
        });
    }else{
        $('tbody tr td#access3 input[type="checkbox"]').each(function(){
            $(this).prop('checked', false);
        });
    }
});
$('#allcb3').change(function(){
    if($(this).prop('checked')){
        $('tbody tr td#access4 input[type="checkbox"]').each(function(){
            $(this).prop('checked', true);
        });
    }else{
        $('tbody tr td#access4 input[type="checkbox"]').each(function(){
            $(this).prop('checked', false);
        });
    }
});
$('#allcb4').change(function(){
    if($(this).prop('checked')){
        $('tbody tr td#access5 input[type="checkbox"]').each(function(){
            $(this).prop('checked', true);
        });
    }else{
        $('tbody tr td#access5 input[type="checkbox"]').each(function(){
            $(this).prop('checked', false);
        });
    }
});

</script>
