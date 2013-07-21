<?php

class QuestionController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete','notification','search'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','sync'),
				'users'=>array('admin'),
			),
			array('allow',
				'actions'=>'suggestions',  // deny all users
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
		
		//Answers are being posted here
		
		if(isset($_POST['Answers'])){
			$a_model = new Answers;
			$model_not = new Notification;
			$a_model->a_body = $_POST['Answers']['a_body'];
			$a_model->q_id = $id;
			$model_not->q_id =$id;
			$a_model->add_time = date("Y-m-d H:i:s");
			if(!$_POST['anonyn']){
				$a_model->user_id = Users::model()->findIdByUsername(Yii::app()->user->getId());
				$model_not->person1 = Users::model()->findIdByUsername(Yii::app()->user->getId());
			}
			else {
				$a_model->user_id = "Anonymous ".Users::model()->findIdByUsername(Yii::app()->user->getId());
				$model_not->person1 = "Anonymous ".Users::model()->findIdByUsername(Yii::app()->user->getId());
			}
			$model = $this->loadModel($id);
			$model_not->person2 = $model->user_id;
			if($a_model->save()){
				//$model_not->activity = "<b>".$model_not->person1."</b> has ".CHtml::link(CHtml::encode("answered"), array('answers/view', 'id'=>$a_model->a_id))." a <b>".CHtml::link(CHtml::encode("Question"), array('view', 'id'=>$model->q_id))."</b> ";
				$model_not->activity = "answer";  
				$model_not->a_id = $a_model->a_id;
				$model_not->save();
				$answers = Answers::model()->findAll("q_id = ".$id);
				$this->render('view',array(
				'model'=>$this->loadModel($id),
				'answers'=>$answers,
				'current_user_id'=>$u_id,
				));
			}
		}
			
		else {
			$answers = Answers::model()->findAll("q_id = ".$id);
			$this->render('view',array(
				'model'=>$this->loadModel($id),
				'answers'=>$answers,
				'current_user_id'=>$u_id,
			));
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Question;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Question']))
		{
			$model_not = new Notification;
			$curr_user = Yii::app()->user->getId();
			$model->attributes=$_POST['Question'];
			$model->add_time = date("Y-m-d H:i:s");
			$model->last_update = date("Y-m-d H:i:s");
			if(!$_POST['anonyn']){
				$model->user_id = Users::model()->findIdByUsername($curr_user);
				$model_not->person1 = Users::model()->findIdByUsername($curr_user);
			}
			else{ 
				$model->user_id = "Anonymous ".Users::model()->findIdByUsername($curr_user);
				$model_not->person1 = "Anonymous User";
			}
			
			if($model->save()){
				$model_not->q_id = $model->q_id;
				//$model_not->activity = "<b>".$model_not->person1."</b> has added a new <b>".CHtml::link(CHtml::encode("Question"), array('view', 'id'=>$model->q_id))."</b>";
				$model_not->activity = "question";
				$model_not->save();
				$this->redirect(array('view','id'=>$model->q_id));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$curr_user = Yii::app()->user->getId();
		$author = explode(" ",$model->user_id);
		if(Users::model()->findIdByUsername($curr_user) == end($author)){
			if(isset($_POST['Question']))
			{
				if($_POST['anonyn'])
					$model->user_id = "Anonymous ".Users::model()->findIdByUsername($curr_user);
				else 
					$model->user_id = Users::model()->findIdByUsername($curr_user);
				$model->attributes=$_POST['Question'];
				$model->last_update = date("Y-m-d H:i:s");
				if($model->save())
					$this->redirect(array('view','id'=>$model->q_id));
			}
		$this->render('update',array(
			'model'=>$model,
		));
		}
		else {
			echo "You are not authorized to update this question.";
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$answers = Answers::model()->findAll("q_id = ".$id);
		$not = Notification::model()->findAll("q_id = ".$id);
		foreach ($answers as $ans)
			$ans->delete();
		foreach ($not as $n)
			$n->delete();
		$this->loadModel($id)->delete();
		
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Question',array('criteria'=>array('order'=>'q_id DESC'),));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * Notificatio Action
	 */

	public function actionNotification()
	{
		$cur_usr = Yii::app()->user->getId();
		$dataProvider=new CActiveDataProvider('Notification',array('criteria'=>array('order'=>'not_id DESC',
		                                                           'condition'=>'person1 !='.Users::model()->findIdByUsername($cur_usr),
																  ),
											  'pagination'=>array('pageSize'=>100,),  
											 ));
		$user = Users::model()->find("username LIKE '".$cur_usr."'");
		$last_not = $user->last_not;
		$data = $dataProvider->getData();
		$user->last_not = $data[0]->not_id;
		$user->save(false);
		$this->render('notification',array(
			'dataProvider'=>$dataProvider,
			'last_not' => $last_not,
		));
	}
	
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Question('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Question']))
			$model->attributes=$_GET['Question'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Question search action
	 */
	public function actionSearch()
	{
		if($_GET['choice']=="People"){
			$result = Users::searchUser($_GET['search']);
			die(var_dump($result));
		}
		else{
			$result = Question::searchQuestion($_GET['search']);
			if(sizeof($result)!=1){
				$dataProvider=new CArrayDataProvider($result,array('keyField' => 'q_id',));
				$this->render('index',array(
					'dataProvider'=>$dataProvider,
				));
			}
			else
			{
				$id = $result[0]->q_id;
				$this->redirect('view/'.$id);
			} 
		}
	}
	
	/**
	 * Question suggestion action
	 */
	public function actionSuggestions()
	{
			$output = array();
			$result = Question::searchQuestion($_GET['q']);
			foreach ($result as $r):
				$output[] = $r->q_body;
			endforeach;
			echo implode("\n", $output);
	}
	
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Question the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Question::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX valihttp://torrentz.eu/623b3288f853e5ad8a5a47bf18b0bc06d8af655ddation.
	 * @param Question $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='question-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
