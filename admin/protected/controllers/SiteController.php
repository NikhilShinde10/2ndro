<?php 

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		
		if(Yii::app()->user->isGuest)
		{	 
			$this->redirect(array('login'));
		}
		else

			$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model = new LoginForm;

    // if it is ajax validation request
    if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') { 
      echo CActiveForm::validate($model);
      Yii::app()->end();
    }

    // collect user input data
    if (isset($_POST['LoginForm'])) {
      $model->attributes = $_POST['LoginForm'];
      // validate user input and redirect to the previous page if valid
      if ($model->validate() && $model->login())
      {
  
        $this->redirect(array('homeSetting/admin'));
      }
    }
    // display the login form
    $this->render('login', array('model' => $model));

	}
	/*public function actionForgotpassword()
	{
		$model=new LoginForm;
		 
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			if($model->validate() && $model->login())
			{	
				$userData=UserMaster::model()->findByPk(Yii::app()->user->getId());
				$emp_id=$userData['employee_name'];
			
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
		else
		{
			$this->render('forgotpassword',array('model'=>$model));
		}
	}*/
	public function actionForgotpassword()
	{
		$model=new UserMaster;
		$app=@$_POST['app'];
		if($app==1)
		{
			header('Access-Control-Allow-Origin: *');
			header('Content-Type: text/plain; charset=utf-8');			
			$username=$_POST['username'];
			$first_name=$_POST['first_name'];
			$user=UserMaster::model()->findByAttributes(array('mobile'=>$username,'first_name'=>$first_name));
			if(!empty($user))
            {
				$name=$user->first_name." ".$user->last_name;
                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $newpassword= substr(str_shuffle($chars),0,10);
                $password=  md5($newpassword);					
                $query="update user_master set password='$password' where user_id=".$user->user_id;
                $command=Yii::app()->db->createCommand($query);
                $update_data=$command->execute();
				require_once(dirname(__FILE__).'/PHPMailer/PHPMailerAutoload.php');
				$mail = new PHPMailer;
				$mail->isSendmail();
				$mail->setFrom('info@iiaaurangabad.com', 'IIA Aurangabad');
				$mail->addReplyTo('info@iiaaurangabad.com ', 'IIA Aurangabad');
				$mail->Subject = 'Forgot Password.';
				$mail->msgHTML("Hello $name, <br />Your Password has been reset now . Your New Password is $newpassword.For security reason please change password.<br />Thank You");
				$mail->AltBody = 'This is a plain-text message body';
				$mail->addAddress($user->email,$name);
				$mail->send();
				echo "done";exit;
			}
			else
			{
				echo "error";exit;
			}
		}
		else
		{
			//$model->scenario='Forgotpassword';
			if(isset($_POST['UserMaster']))
			{       
					
				$model->attributes=$_POST['UserMaster'];
				$username=$model->mobile;
				$first_name=$model->first_name;
				//print_r($username." ".$first_name);die;

			if(empty($username) && empty($first_name))
			    { 

				Yii::app()->user->setFlash('success','File Upladeded successfully');	
				}
				else
				{
				            $user=UserMaster::model()->findByAttributes(array('mobile'=>$username,'first_name'=>$first_name));

				            if(!empty($user))
				            {
						$name=$user->first_name." ".$user->last_name;
				                    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
				                    $newpassword= substr(str_shuffle($chars),0,10);
				                    $password=  md5($newpassword);					
				                    $query="update user_master set password='$password' where user_id=".$user->user_id;
				                    $command=Yii::app()->db->createCommand($query);
				                    $update_data=$command->execute();
						require_once(dirname(__FILE__).'/PHPMailer/PHPMailerAutoload.php');
						$mail = new PHPMailer;
						$mail->isSendmail();
						$mail->setFrom('info@iiaaurangabad.com', 'IIA Aurangabad');
						//Set an alternative reply-to address
						$mail->addReplyTo('info@iiaaurangabad.com ', 'IIA Aurangabad');
						$mail->Subject = 'Forgot Password.';
						$mail->msgHTML("Hello $name, <br />Your Password has been reset now . Your New Password is $newpassword.For security reason please change password.<br />Thank You");
	
						$mail->AltBody = 'This is a plain-text message body';
						$mail->addAddress($user->email,$name);
						//$mail->addCC('info@iiaaurangabad.com ', 'IIA Aurangabad');
						$mail->send();

				                
						Yii::app()->user->setFlash('success','Your Password is changed Please check your Email.');
				                    $this->redirect(array('site/login'));
				            }
					else
					{
						Yii::app()->user->setFlash('danger','User Information Not Found');
					}
				    }
			}
			$this->render('forgotpassword',array('model'=>$model));
		}
	}
	/*public function actionGetMenuNotAccesibleForUser()
	{
		$id=Yii::app()->user->getId();
		$query="select menu_desc from menu_master mm, user_menu_access_master uma, user_master um where mm.menu_id=uma.menu and um.um_id=uma.user and uma.access=0 and um.um_id=$id";          
		$command=yii::app()->db->createCommand($query);
		$NotAccessibleMenu=$command->queryAll();
		foreach($NotAccessibleMenu)
		echo json_encode($NotAccessibleMenu);
		//print_r($NotAccessibleMenu);
	}*/

	
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
    </div>
<?php endif; ?>
