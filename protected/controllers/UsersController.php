<?php

class UsersController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','views'),
				'users'=>array('admin'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','login'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('views','view','update','verify','follow'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 
	public function actionView($id)
	{
		$model = $this->loadModel($id);
		$dataProvider = new CActiveDataProvider('Question',array('criteria'=>array('condition'=>'user_id = "'.$model->user_id.'"','order'=>'q_id DESC'),));
		if($model->username == Yii::app()->user->getId() && ($model->image == "" || $model->education == "" || $model->job == "")){
			$this->render('update',array(
			'model'=>$model,
			));
		}
		else{
			$this->render('view',array(
				'model'=>$model,
				'dataProvider'=>$dataProvider,
			));
		}
	}
	*/
	/**
	 * Another action for views users
	 */
	public function actionViews($id)
	{
		$user = Users::model()->find("username LIKE '".urldecode($id)."'");
		$id = $user->user_id;
		$current_id = Users::model()->findIdByUsername(Yii::app()->user->getId());
		$following = Follow::model()->findByPk($current_id);
		$following = explode(",",$following->user_following);
		$model = $this->loadModel($id);
		if($model->username == Yii::app()->user->getId() && ($model->image == "" || $model->education == "" || $model->job == "")){
			$this->render('update',array(
			'model'=>$model,
			'following'=>$following,
			));
		}
		else{
			$dataProvider = new CActiveDataProvider('Question',array('criteria'=>array('condition'=>'user_id = '.$model->user_id,'order'=>'q_id DESC'),));
			$this->render('view',array(
				'model'=>$model,
				'following'=>$following,
				'dataProvider'=>$dataProvider,
			));
		}
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
		if(isset($_POST['Users']))
		{
			if($_POST['Users']['password'] != '')
				$_POST['Users']['password'] = md5($_POST['Users']['password']);
			$code = rand(3000,9999);
			$model->verification = $code;
			$model->attributes=$_POST['Users'];
						
			if($model->save()){
				$to = $_POST['Users']['email_id'];
				$from = 'service@quanz.in';
				$subject = 'New Registration';
				$message = 'Dear '.$_POST['Users']['f_name'].',';
				$message .= 'Thank you for your registration. Your email verification code is '.$code;
				$headers = 'From: '.$from;
				mail($to, $subject, $message, $headers);
				$_SESSION['msg']['signup'] = 'This looks great..!! <br> Now you are ready to login. Please check your email for the email verification code.';
				$this->redirect(array('site/login'));
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
	 *
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST))
		{
			die(var_dump($_POST));
			$model->attributes=$_POST['Users'];
			$model->password = md5($_POST['Users']['password']);
			if($model->save())
				$this->redirect(array('view','id'=>$model->user_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	*/
	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate()
	{
		
		if(!Yii::app()->user->isGuest){
		$id = Users::model()->findByUsername(Yii::app()->user->name);
		$id = $id->user_id;
		$model=$this->loadModel($id);
       // Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);
		if(isset($_POST['Users']))
		{
			if(isset($_POST['Users']['college'])){
				   //save education details
				$college_size = sizeof($_POST['Users']['college']);
				$college_name = $_POST['Users']['college'];
				$course_name = $_POST['Users']['course'];
				$course_from = $_POST['Users']['course_from'];
				$course_to = $_POST['Users']['course_to'];
				$edu = array();
				for($i=0;$i<$college_size;$i++){
					if($college_name[$i] != ""){
						$edu["education".($i+1)] = $college_name[$i]."|".$course_name[$i]."|".$course_from[$i]."|".$course_to[$i];
						$find_college = Institution::model()->find("inst_name LIKE '".trim($college_name[$i])."'");
						if($find_college){
							$student = explode(",",$find_college->inst_student);
							//die(var_dump($student));
							if(!in_array($id, $student))
								array_push($student, $id);
							$find_college->inst_student = implode(",",$student);
							$student = explode(",",$find_college->inst_follower);
							if(!in_array($id, $student))
								array_push($student, $id);
							$find_college->inst_follower = implode(",",$student);
							$find_college->save(false);
						}
						else {
							$college = new Institution;
							$college->inst_name = trim($college_name[$i]); 
							$college->inst_student = $id;
							$college->inst_follower=$id;
							$college->inst_creator=$id;
							$college->save(false);
						}
							
					}
				}
				
				$model->education = json_encode($edu);
			}
			if(isset($_POST['Users']['company'])){			//save job details
				$job_size = sizeof($_POST['Users']['company']);
				$company_name = $_POST['Users']['company'];
				$post = $_POST['Users']['post'];
				$job_from = $_POST['Users']['job_from'];
				$job_to = $_POST['Users']['job_to'];
				$job = array();
				
				for($i=0;$i<$college_size;$i++){
					if($company_name[$i]!=""){
						$job["job".($i+1)] = $company_name[$i]."|".$post[$i]."|".$job_from[$i]."|".$job_to[$i];
					$find_com = Company::model()->find("com_name LIKE '".trim($company_name[$i])."'");
						if($find_com){
							$employe = explode(",",$find_com->com_emp);
							if(!in_array($id, $employe))
								array_push($employe, $id);
							//print_r($employe);
							$find_com->com_emp = implode(",",$employe);
							$employe = explode(",",$find_com->com_follower);
							if(!in_array($id, $employe))
								array_push($employe, $id);
							$find_com->com_follower = implode(",",$employe);
							$find_com->save(false);
						}
						else {
							$com = new Company;
							$com->com_name = trim($company_name[$i]); 
							$com->com_emp = $id;
							$com->com_follower=$id;
							$com->com_creator=$id;
							$com->save(false);
						}
					}
				}
				
				$model->job = json_encode($job);
			}
			
			$model->attributes=$_POST['Users'];
			
			//die(var_dump($_FILES));
			
			if($_FILES['image']['name']!='' && $_FILES['image']['size']<1500000 && !$_FILES['image']['error']){
				$ext = explode('.',$_FILES['image']['name']);
				$ext = end($ext);
				move_uploaded_file($_FILES["image"]["tmp_name"],"../".Yii::app()->baseUrl."/images/users/".$model->username.".".$ext);
				copy("../".Yii::app()->baseUrl."/images/users/".$model->username.".".$ext,"../".Yii::app()->baseUrl."/images/users/thumbs/thumb_".$model->username.".".$ext);
				self::resize_image("../".Yii::app()->baseUrl."/images/users/".$model->username.".".$ext, 300, 300);
				self::resize_image("../".Yii::app()->baseUrl."/images/users/thumbs/thumb_".$model->username.".".$ext, 100, 100);
				$model->image = $model->username.".".$ext;
			}
			
			if($model->save(false)){
				$this->redirect(array(Yii::app()->baseUrl.'/../'.$model->username));
			}
			
		}

		$this->render('update',array(
			'model'=>$model,
		));
		}
	else
		echo "This is not your profile to edit.";
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
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionVerify()
	{
		$model=Users::model()->findByUsername(Yii::app()->user->name);
		if($_GET['code']==''){
			echo "<div class='alert alert-error'>Please enter some code.</div>";
		}
		elseif(strlen($_GET['code'])!=4){
			echo "<div class='alert alert-error'>Code must contain 4 digit.</div>";
		}
		elseif($model->verification == $_GET['code']){
			$model->verification = 0;
			$model->save(false);
			unset($_SESSION['verify']);
			echo "<div class='alert alert-success'>Thank you for verification.</div>";
		}
		else {
			echo "<div class='alert alert-error'>Wrong verification code. Try again!</div>";
		}
	}
	
	
	public function actionFollow($id){
		$current_id = Users::model()->findIdByUsername(Yii::app()->user->getId());
		$follow = Follow::model()->findByPk($current_id);
		if(!$follow){
			$follow = new Follow;
			$follow->user_id = $current_id;
			//$follow->save(false);
		}
		$following = Follow::model()->findByPk($id);
		if(!$following){
			$following = new Follow;
			$following->user_id = $id;
			//$following->save(false);
		}
		$user_following = explode(",",$follow->user_following);
		$pos = array_search($id, $user_following);
		//die(var_dump($pos));
		if(!$pos){
			$user_following[] = $id;
			//if($user_following[0]=="")unset($user_following[0]);
			$follow->user_following = implode(",",$user_following);
			$follow->save(false);
			$follower = explode(",",$following->user_follower);
			$follower[] = $current_id;
			//if($follower[0]=="")unset($follower[0]);
			$following->user_follower = implode(",",$follower);
			$following->save(false);
			$not = new Notification;
			$not->person1 = $current_id;
			$not->person2 = $id;
			$not->activity = 'follow';
			$not->save(false);
			echo '1';
		}
		else{
			unset($user_following[$pos]);
			$follow->user_following = implode(",",$user_following);
			$follow->save(false);
			$follower = explode(",",$following->user_follower);
			$pos1 = array_search($current_id, $follower);
			unset($follower[$pos1]);
			$following->user_follower = implode(",",$follower);
			$following->save(false);
			$not = Notification::model()->find('person1 = '.$current_id.' AND person2 = '.$id.' AND activity LIKE "follow"');
			if($not)$not->delete();
			echo '0';
		}	
	}
	
	function resize_image($file, $w, $h, $crop=FALSE) {
    list($width, $height) = getimagesize($file);
    $r = $width / $height;
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width-($width*($r-$w/$h)));
        } else {
            $height = ceil($height-($height*($r-$w/$h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }
    }
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    return $dst;
	}
}
