<?php 

class WhyUsController extends Controller
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
		$model=new WhyUs;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['WhyUs']))
		{
			$model->attributes=$_POST['WhyUs'];
			$model->created_at=date('Y-m-d');
			$model->banner=CUploadedFile::getInstance($model,'banner');
			$model->image=CUploadedFile::getInstance($model,'image');
			if($model->save())
			{
				if($model->banner!="")
				{
					$ext = explode(".",$model->banner);
					$filen=$model->id."-WhyUs.".$ext[1];
					$model->banner->saveAs("uploads/WhyUs/".$filen);	
					$model->banner=$filen;
     			}

				if($model->image!="")
				{
					$ext = explode(".",$model->image);
					$filen=$model->id."-WhyUs-image.".$ext[1];
					$model->image->saveAs("uploads/WhyUs/".$filen);	
					$model->image=$filen;
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
		$banner=$model->banner;
		$image=$model->image;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['WhyUs']))
		{
			$model->attributes=$_POST['WhyUs'];
			$model->banner=CUploadedFile::getInstance($model,'banner');
			$model->image=CUploadedFile::getInstance($model,'image');
			if($model->banner=="")
			{
				$model->banner=$banner;	
			}
			if($model->image=="")
			{
				$model->image=$image;	
			}
			if($model->save())
			{
				if($model->banner!=$banner)
				{		
					$ext = explode(".",$model->banner);
					$filen=$model->id."-WhyUs.".$ext[1];
					$model->banner->saveAs("uploads/WhyUs/".$filen);	
					$model->banner=$filen;
				}
				if($model->image!=$image)
				{		
					$ext = explode(".",$model->image);
					$filen=$model->id."-WhyUs-image.".$ext[1];
					$model->image->saveAs("uploads/WhyUs/".$filen);	
					$model->image=$filen;
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
		$dataProvider=new CActiveDataProvider('WhyUs');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new WhyUs('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['WhyUs']))
			$model->attributes=$_GET['WhyUs'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return WhyUs the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=WhyUs::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param WhyUs $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='WhyUs-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
