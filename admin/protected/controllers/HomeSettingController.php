<?php 

class HomeSettingController extends Controller
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
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new HomeSetting;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HomeSetting']))
		{
			$model->attributes=$_POST['HomeSetting'];
			$model->logo=CUploadedFile::getInstance($model,'logo');
			$model->home_slider_image=CUploadedFile::getInstance($model,'home_slider_image');
			$model->home_slider_image1=CUploadedFile::getInstance($model,'home_slider_image1');
			$model->about_area_image=CUploadedFile::getInstance($model,'about_area_image');
			$model->service_image=CUploadedFile::getInstance($model,'service_image');
		
			if($model->save())
			{

				if($model->logo!="")
					{
						$ext = explode(".",$model->logo);
						$filen=$model->id."-logo".".".$ext[1];
						$model->logo->saveAs("uploads/setting/".$filen);	
						$model->logo=$filen;
					}
				if($model->home_slider_image!="")
					{
						$ext = explode(".",$model->home_slider_image);
						$filen=$model->id."-homeSlider".".".$ext[1];
						$model->home_slider_image->saveAs("uploads/setting/".$filen);	
						$model->home_slider_image=$filen;
					}
					if($model->home_slider_image1!="")
					{
						$ext = explode(".",$model->home_slider_image1);
						$filen=$model->id."-homeSlider1".".".$ext[1];
						$model->home_slider_image1->saveAs("uploads/setting/".$filen);	
						$model->home_slider_image1=$filen;
					}
					if($model->about_area_image!="")
					{
						$ext = explode(".",$model->about_area_image);
						$filen=$model->id."-HomeAbout".".".$ext[1];
						$model->about_area_image->saveAs("uploads/setting/".$filen);	
						$model->about_area_image=$filen;
					}
					if($model->service_image!="")
					{
						$ext = explode(".",$model->service_image);
						$filen=$model->id."-HomeService".".".$ext[1];
						$model->service_image->saveAs("uploads/setting/".$filen);	
						$model->service_image=$filen;
					}
					$model->save();
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$oldLogo=$model->logo;
		$oldHome=$model->home_slider_image;
		$oldHome1=$model->home_slider_image1;
		$oldFocus=$model->about_area_image;
		$oldBelief=$model->service_image;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HomeSetting']))
		{
			$model->attributes=$_POST['HomeSetting'];
			$model->logo=CUploadedFile::getInstance($model,'logo');
			$model->home_slider_image=CUploadedFile::getInstance($model,'home_slider_image');
			$model->home_slider_image1=CUploadedFile::getInstance($model,'home_slider_image1');
			$model->about_area_image=CUploadedFile::getInstance($model,'about_area_image');
			$model->service_image=CUploadedFile::getInstance($model,'service_image');
			if($model->logo=="")
				$model->logo=$oldLogo;	
			if($model->home_slider_image=="")
				$model->home_slider_image=$oldHome;	
			if($model->home_slider_image1=="")
				$model->home_slider_image1=$oldHome1;	
			if($model->about_area_image=="")
				$model->about_area_image=$oldFocus;	
			if($model->service_image=="")
				$model->service_image=$oldBelief;				

			if($model->save())
			{
				if($model->logo!=$oldLogo)
				{
						$ext = explode(".",$model->logo);
						$filen=$model->id."-logo".".".$ext[1];
						$model->logo->saveAs("uploads/setting/".$filen);	
						$model->logo=$filen;
					}
				if($model->home_slider_image!=$oldHome)
				{
						$ext = explode(".",$model->home_slider_image);
						$filen=$model->id."-homeSlider".".".$ext[1];
						$model->home_slider_image->saveAs("uploads/setting/".$filen);	
						$model->home_slider_image=$filen;
					}
					if($model->home_slider_image1!=$oldHome1)
					{
						$ext = explode(".",$model->home_slider_image1);
						$filen=$model->id."-homeSlider1".".".$ext[1];
						$model->home_slider_image1->saveAs("uploads/setting/".$filen);	
						$model->home_slider_image1=$filen;
					}
					if($model->about_area_image!=$oldFocus)
					{
						$ext = explode(".",$model->about_area_image);
						$filen=$model->id."-HomeAbout".".".$ext[1];
						$model->about_area_image->saveAs("uploads/setting/".$filen);	
						$model->about_area_image=$filen;
					}
					if($model->service_image!=$oldBelief)
					{
						$ext = explode(".",$model->service_image);
						$filen=$model->id."-HomeService".".".$ext[1];
						$model->service_image->saveAs("uploads/setting/".$filen);	
						$model->service_image=$filen;
					}
					$model->save();
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('HomeSetting');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new HomeSetting('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HomeSetting']))
			$model->attributes=$_GET['HomeSetting'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return HomeSetting the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=HomeSetting::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param HomeSetting $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='home-setting-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
