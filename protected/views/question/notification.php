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
	if($data->person2 != ''){
		if($data->q_id != 0){
			if(end($person1) == end($person2))
				echo $data->activity."asked by <b>himself</b>";
			elseif (Yii::app()->user->getId() != $data->person2)
				echo $data->activity."asked by <b>".$person2[0]."</b>";
			else
				echo $data->activity."asked by <b>you</b>";
			}
		else if($data->a_id != 0){
			if(end($person1) == end($person2))
				echo $data->activity." <b>himself</b>";
			elseif (Yii::app()->user->getId() != $data->person2)
				echo $data->activity." <b>".$person2[0]."</b>";
			else
				echo $data->activity." <b>you</b>";
			}
	}

	else 
		echo $data->activity;
?>
</div>
<?php endforeach;?>
