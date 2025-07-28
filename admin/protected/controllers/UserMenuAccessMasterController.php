<?php 

class UserMenuAccessMasterController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('?'),
			),
		);
	}

	
	/*Index*/	
	public function actionAdmin()
	{
		$model = new  UserMaster();
		if(isset($_POST['UserMaster']))
		{

			$role_id = $_POST['UserMaster']['admin_id'];
			if(!empty($_POST['UserMaster']['admin_id']))
			$this->redirect(array("manageMenuAccess","role_id"=>$role_id));
			else
				Yii::app()->user->setFlash('warning','Select user for set access');			
		}
		$this->render('employee_form',array("model"=>$model));
	}	
	
	/*GetUserName*/	
	public function actionGetUserName()
	{
		$um_id = $_REQUEST['um_id'];
		//print_r($um_id);die;
		$model = UserMaster::model()->findByAttributes(array('um_id'=>$um_id));	
		echo !empty($model->username)?$model->username:"s";
	}
	
	/*ManageMenuAccess*/	
	public function actionmanageMenuAccess()
	{
		$role_id = $_REQUEST['role_id'];
		$this->render('_manage_control',array("role_id"=>$role_id));

		//echo "<pre>";print_r($_REQUEST);exit;
	}
	
		/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	 
	public function actionmanageAccess()
  	{
		$role_id = $_POST['role_id'];
		Yii::app()->user->setState('menu_id',1);
		Yii::app()->user->setState('menu','Manage Access');
      		if(isset($_POST['save']))
        	{
			//print_r($_POST);die;
		        $query="update user_menu_access_master set access=0, create_action=0,update_action=0,delete_action=0,view_action=0 WHERE user=$role_id";
		        $command=Yii::app()->db->createCommand($query);
		        $user=$command->execute();
		    	if(isset($_POST['role_id']))
		    	{
				//$count=count($_POST['acc']);
				//echo $count; die;
				$query="update user_menu_access_master set access=0,create_action=0,update_action=0,delete_action=0,view_action=0 WHERE user=$role_id";
				$command=Yii::app()->db->createCommand($query);
				$user=$command->execute();


		$menus=Yii::app()->db->createCommand("SELECT * FROM `menu_master` WHERE active=1")->queryall();

				for($counter=0;$counter<count($menus);$counter++)
				{   

					  $menu=$menus[$counter]['menu_id'];
					  $ispresent=UserMenuAccessMaster::model()->find(array('condition'=>"user=$role_id AND menu=$menu"));					

					if(isset($_POST[$menu."-ck"]))
						{
							if($ispresent==null)
							  {
							    $model =new UserMenuAccessMaster;
							    $model->user=$role_id;
							    $model->menu=$menu;
							    $model->access=1;
							    if(isset($_POST[$menu."-ck1"]))
							    $model->create_action=1;
								else
							 	 $model->create_action=0;

							    if(isset($_POST[$menu."-ck2"]))
							    $model->update_action=1;
								else
								$model->update_action=0;

								if(isset($_POST[$menu."-ck3"]))
							    $model->delete_action=1;
								else
								 $model->delete_action=0;

							if(isset($_POST[$menu."-ck4"]))
							    $model->view_action=1;
								else
								$model->view_action=0;

							  $model->save();   
							  }
							  else
							  { 
							    $ispresent->access=1;
							    if(isset($_POST[$menu."-ck1"]))
							    $ispresent->create_action=1;
								else
							 	 $ispresent->create_action=0;

							    if(isset($_POST[$menu."-ck2"]))
							    $ispresent->update_action=1;
								else
								$ispresent->update_action=0;

								if(isset($_POST[$menu."-ck3"]))
							    $ispresent->delete_action=1;
								else
								 $ispresent->delete_action=0;

							if(isset($_POST[$menu."-ck4"]))
							    $ispresent->view_action=1;
								else
								$ispresent->view_action=0;
							   $ispresent->save();  
							  }	

						}
						else
						{
										//echo "no";die;
						}
					 			
				}

				Yii::app()->user->setFlash('success','Access Preferences Saved Successfully');
				$this->redirect(array('admin'));
				
		        }
        	}
    	$this->render('_manage_control',array('role_id'=>$role_id)); 

}   
}

