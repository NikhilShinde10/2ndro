<?php

class SettingsController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	// public function actionView($id)
	// {
	// 	$this->render('view',array(
	// 		'model'=>$this->loadModel($id),
	// 	));
	// }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate()
	{
		$setting_fields=Settings::model()->findAll();
		foreach ($setting_fields as $setting_field) {
			$setting_fields_values[$setting_field['field']] = $setting_field['value'];
		}
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($setting_fields_values);

		// echo "<pre>";
		// print_r($_POST);exit;

		if(isset($_POST['yt0']))
		{
			foreach ($_POST as $key => $value) {
				if($key=='yt0'){
					continue;
				}			

				Yii::app()->db->createCommand("UPDATE settings SET  value = '$value'  WHERE field='$key'")->execute();
			}
			
			Yii::app()->user->setFlash('success','Settings Updated Successfully');
			$this->redirect(array('update'));
		}

		$this->render('update',array(
			'model'=>$setting_fields_values,
		));
	}

	

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Settings');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

}
