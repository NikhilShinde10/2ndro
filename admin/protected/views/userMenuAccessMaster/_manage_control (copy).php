<?php 
	$this->pageTitle="User Menu Access";
	$this->breadcrumbs=array(
	'Manage Menu Wise Access'=>array('control'),
	);
?>
<div class="form" style="width:100%;">   
<?php 
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'unit-progress-log-form',
	'action'=>Yii::app()->createUrl('UserMenuAccessMaster/manageAccess'),
	'enableAjaxValidation'=>true,
));
?>
<input type="hidden" name="um_id"value="<?php  echo $um_id?>" />

<?php  
$ispresent=UserMenuAccessMaster::model()->findAll(array('condition'=>"user=$um_id"));

$emp=UserMaster::model()->findByPk($um_id);
$employee=EmployeeMaster::model()->findByPk($emp['employee_name']);
echo  "<h3>"."Manage Menu Access for: ".$employee['first_name']." ".$employee['last_name']."</h3>"."</b>";

if($ispresent==null)
 { 
  $query="select menu_id,menu_desc,'0' as access from menu_master order by menu_desc asc";      		
  $command=Yii::app()->db->createCommand($query);
  $user=$command->queryAll();
  }
else
{
    $query="select m.menu_id,m.menu_desc,u.access  from menu_master m, user_menu_access_master u where u.user=$um_id AND u.menu=m.menu_id 	union select menu_id,menu_desc,'0' as access from menu_master where menu_id NOT IN(select menu from user_menu_access_master where user=$um_id) order by menu_desc asc";
    $command=Yii::app()->db->createCommand($query);
    $user=$command->queryAll();
}
    
$dataProvider = new CArrayDataProvider($user, array('keyField'=>'menu_id'));
$dataProvider->setPagination(false);

$this->widget('EScrollableGridView', array(
    'id'=>'something',
    //The height you want the scrollable row area to be, defaults to 100,
    //Optional or you can leave out completely if default works for you
    'height' => '50', 
    //The width you want the scrollable row area to be, defaults to the,
    //natural width of the table. You can leave out completely if default
    //works for you
    'width' => '500',
    //Whether header should flush with scroll bar. This is a matter of 
    //preferenece. You can leave out completely if default works for you
    'flush' => false,
    //recommended but not necessary, the following change puts all data
    //on one page for you. This works with or without this extension, I
    //am just putting it here for easy reference
    'dataProvider'=>$dataProvider,
	'columns'=>array(
	array(
		'name'=>'menu_desc',
		'header'=>'Menu Name',
		'value'=>'$data["menu_desc"]',
    )                ,
 	array(
		  'class'=>'CCheckBoxColumn',
		  'id'=>'acc',
		  'selectableRows'=>'2',	
		  'checked'=>'$data["access"]',
		),
	),
  ));
  ?>
<?php  echo CHtml::submitButton('Save',array('name'=>'save')); ?>
<?php  $this->endWidget(); ?>

</div><!-- form -->

