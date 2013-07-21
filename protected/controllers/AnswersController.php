<?php

class AnswersController extends Controller
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
				'actions'=>array('view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','voteup','votedown','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','update','index'),
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
	 */
	public function actionView($id)
	{
		$user = Users::model()->find('username LIKE "'.Yii::app()->user->getId().'"');
		$u_id = $user->user_id;
		$model = $this->loadModel($id);
		$q_model = Question::model()->findByPk($model->q_id);
		$this->render('view',array(
			'model'=>$model,
			'q_model'=>$q_model,
			'current_user_id'=>$u_id,
		));
	}
	/**
	 * Voting
	 */
	public function actionVoteup($id)
		{
			$model = $this->loadModel($id);
			$curr_user = Users::model()->find('username LIKE "'.Yii::app()->user->getId().'"');
			$answer_auth = $model->user_id;
			$voter = $curr_user->username;
			
			$model_not = new Notification;
			$model_not->person1 = $voter;
			$model_not->person2 = $answer_auth;
			//$model_not->activity = "<b>".$voter."</b> has voted up an ".CHtml::link(CHtml::encode("answer"), array('answers/view', 'id'=>$id))." posted by ";
			$model_not->activity = "voteup";
			$model_not->a_id = $id;
			$model_not->save();
			
			$voted = $model->vote;
			$size = 0;
			if(!$voted){
				$model->vote = $curr_user->user_id;
				$model->save();
				$size = 1;		
			}
			else{
				$pre_votes = explode("|", $voted);
				if(!in_array($curr_user->user_id, $pre_votes))
					array_push($pre_votes, $curr_user->user_id);
				$size = sizeof($pre_votes);
				$array = implode("|", $pre_votes);
				
				$model->vote = $array;
				$model->save();
			}
			echo $size;
		}
		
		public function actionVotedown($id)
		{
			$model = $this->loadModel($id);
			$curr_user = Users::model()->find('username LIKE "'.Yii::app()->user->getId().'"');
			$sql = "person1 LIKE '".$curr_user->username."' AND a_id = ".$id." AND activity LIKE 'voteup'";
			Notification::model()->deleteAll($sql); //While voting down, notification for voting will be deleted
			$voted = $model->vote;
			$pre_votes = explode("|", $voted);
			$array = array_keys($pre_votes, $curr_user->user_id);
			unset($pre_votes[$array[0]]);
			$size = sizeof($pre_votes);
			$arr = implode("|", $pre_votes);
			$model->vote = $arr;
			$model->save();
			echo $size;
		}
	
	
	
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Answers;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Answers']))
		{
			$model->attributes=$_POST['Answers'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->a_id));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Answers']))
		{
			$model->attributes=$_POST['Answers'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->a_id));
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
		$ans = Answers::model()->findByPk($id);
		$ques = Question::model()->findByPk($ans->q_id);
		$ques_auth = explode(" ",$ques->user_id);
		$ans_auth = explode(" ",$ans->user_id);
		$curr_user = Yii::app()->user->getId();
		if($curr_user == "admin" || Users::model()->findIdByUsername($curr_user) == end($ans_auth) || Users::model()->findIdByUsername($curr_user) == end($ques_auth)){
			$this->loadModel($id)->delete();
			$nots = Notification::model()->findAll('a_id = '.$id);
			foreach($nots as $not)
				$not->delete();
		}
			

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(Yii::app()->request->urlReferrer);
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Answers');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Answers('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Answers']))
			$model->attributes=$_GET['Answers'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Answers the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Answers::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Answers $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='answers-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
