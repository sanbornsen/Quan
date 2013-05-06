<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	'Questions'=>array('index'),
	$model->q_id,
);
if($model->user_id == Yii::app()->user->getId()){
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

<h2><?php echo $model->q_body; ?></h2>
<?php if($model->q_desc != ''):?>
		<h4>
			<b>Description:</b><?= $model->q_desc ?>
		</h4>
<?php endif;?>
<hr>

<h4><b>Answers :</b></h4>
<?php foreach ($answers as $ans):?>
<?php
if($ans->user_id != "admin"){ 
	$username = Users::model()->find("username LIKE '".$ans->user_id."'");
	$usr = $username->f_name;
	}
else 
	$usr = "admin";
?>
<div>
	<h4><b><?= $usr ?> </b> says : </h4><br>
	<?= $ans->a_body ?>
	<br>
	<?php if(Yii::app()->user->getId() == "admin" || Yii::app()->user->getId() == $ans->user_id || Yii::app()->user->getId() == $model->user_id):?>
	<?php echo CHtml::link(CHtml::encode('Delete'), array('answers/delete', 'id'=>$ans->a_id),
  			array(
 		   'submit'=>array('answers/delete', 'id'=>$ans->a_id),
    	   'class' => 'delete','confirm'=>'This will remove the answer. Are you sure?'
  			)
		);?>
	
	<?php endif;?>
</div>
<hr>
<?php endforeach;?>
<hr>
<h4>Add a new answer</h4>
<?php $a_model = new Answers;?>
<?php echo $this->renderPartial('_aform', array('model'=>$a_model)); ?>