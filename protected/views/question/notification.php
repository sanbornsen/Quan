<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	'Questions'=>array('index'),
	"Notifications",
);
$q_auth = explode(" ",$model->user_id);
if(end($q_auth) == Yii::app()->user->getId()){
	$this->menu=array(
		array('label'=>'List Question', 'url'=>array('index')),
		array('label'=>'Create Question', 'url'=>array('create')),
		array('label'=>'Update Question', 'url'=>array('update', 'id'=>$model->q_id)),
		array('label'=>'Delete Question', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->q_id),'confirm'=>'Are you sure you want to delete this item?')),
	);
}
elseif(Yii::app()->user->getId()=="admin"){
	$this->menu=array(
		array('label'=>'List Question', 'url'=>array('index')),
		array('label'=>'Create Question', 'url'=>array('create')),
		array('label'=>'Update Question', 'url'=>array('update', 'id'=>$model->q_id)),
		array('label'=>'Delete Question', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->q_id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Questions', 'url'=>array('admin')),
	);
}
else {
	$this->menu=array(
		array('label'=>'List Question', 'url'=>array('index')),
		array('label'=>'Create Question', 'url'=>array('create')),
	);
}
?>

<?php 
foreach ($dataProvider->getData() as $data):
?>
<?php if($data->not_id > $last_not):?>
	<div class = "notification-green">
<?php else:?>
	<div class = "notification-yellow">
<?php endif;?>
<?php 
	$person1 = explode(" ", $data->person1);
	$person2 = explode(" ", $data->person2);
	/*$person1_model = Users::model()->find("username LIKE '".end($person1)."'");
	$person2_model = Users::model()->find("username = '".end($person2)."'");
	if($person1_model)
		$person1_name = ucwords($person1_model->f_name)." ".ucwords($person1_model->l_name);
	else
		$person1_name = end($person1);
	if($person2_model)
		$person2_name = ucwords($person2_model->f_name)." ".ucwords($person2_model->l_name);
	else 
		$person2_name = end($person2);
			*/
	$person1_name = Users::model()->findNameByUserid($data->person1);
	if($data->person2 != ""){
		$person2_name = Users::model()->findNameByUserid($data->person2);
	}
	else {
		$person2_name = "";
	}
	if($data->activity == "answer"){ // Notification for some one answering on a question
		if(end($person1) == end($person2)) // If some one answer on his own question
			echo $person1_name." has ".CHtml::link(CHtml::encode("answered"), array('answers/view', 'id'=>$data->a_id))." a ".CHtml::link(CHtml::encode("Question"), array('question/view', 'id'=>$data->q_id))." asked by himself.";
		elseif (Users::model()->findIdByUsername(Yii::app()->user->getId()) != $data->person2) // If the question is not posted by the user or the same person who answerd
			echo $person1_name." has ".CHtml::link(CHtml::encode("answered"), array('answers/view', 'id'=>$data->a_id))." a ".CHtml::link(CHtml::encode("Question"), array('question/view', 'id'=>$data->q_id))." asked by ".$person2_name.".";
		else // Here the answer is given to a question posted by the current user 
			echo $person1_name." has ".CHtml::link(CHtml::encode("answered"), array('answers/view', 'id'=>$data->a_id))." a ".CHtml::link(CHtml::encode("Question"), array('question/view', 'id'=>$data->q_id))." asked by you.";
		}
	if($data->activity == "voteup"){ // Notification for some one voting on a answer
		if(end($person1) == end($person2)) // If some one vote on his own posted answer
			echo $person1_name." has voted up an ".CHtml::link(CHtml::encode("Answer"), array('answers/view', 'id'=>$data->a_id))." posted by himself.";
		elseif (Users::model()->findIdByUsername(Yii::app()->user->getId()) != $data->person2) // Both person 1 and 2 are distinct
			echo $person1_name." has voted up an ".CHtml::link(CHtml::encode("Answer"), array('answers/view', 'id'=>$data->a_id))." posted by ".$person2_name.".";
		else // voted on an answer posted by the current user
			echo $person1_name." has voted up an ".CHtml::link(CHtml::encode("Answer"), array('answers/view', 'id'=>$data->a_id))." posted by you.";
		}
	if($data->activity == "question"){ // Who ever asked a new question
		$output = $person1_name." has asked a new ".CHtml::link(CHtml::encode("Question"), array('question/view', 'id'=>$data->q_id)).".</br>";
		$output .= CHtml::link(CHtml::encode(Question::model()->getBodyById($data->q_id)), array('question/view', 'id'=>$data->q_id));
		echo $output;
	}
	if($data->activity == "follow"){
		if($data->person2){
			if(Users::model()->findIdByUsername(Yii::app()->user->getId()) == end($person2))
				echo $person1_name." is now <b>following</b> You.";
			else
				echo $person1_name." is now <b>following</b> ".$person2_name.".";
		}
		if($data->q_id){
			$output = $person1_name." is following a ".CHtml::link(CHtml::encode("Question"), array('question/view', 'id'=>$data->q_id))."</br>";
			$output .= CHtml::link(CHtml::encode(Question::model()->getBodyById($data->q_id)), array('question/view', 'id'=>$data->q_id));
			echo $output;
		}
	}
?>
</div>
<?php endforeach;?>
