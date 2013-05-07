<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	'Questions'=>array('index'),
	$model->q_id,
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

<h2><?php echo $model->q_body; ?></h2>
<?php if($model->q_desc != ''):?>
		<h4>
			<b>Description:</b><?= $model->q_desc ?>
		</h4>
<?php endif;?>
<?php $date = explode(" ", $model->add_time)?>
<p class="hint">Date : <?= $date[0] ?> | Time : <?= $date[1] ?></p>
<hr>

<h3><b>Answers :</b></h3>
	
<?php foreach ($answers as $ans):?>
<?php
$ans_auth = explode(" ", $ans->user_id);
if($ans->user_id != "admin"){
	 
	$username = Users::model()->find("username LIKE '".$ans_auth[0]."'");
	if($username)
		$usr = $username->f_name;
	else 
		$usr = $ans_auth[0];
	}
else 
	$usr = "admin";
?>
<div>
	<h4><b><?= $usr ?> </b><?= CHtml::link(CHtml::encode("says : "), array('answers/view', 'id'=>$ans->a_id));?></b> </h4>
	<font size="3"><?= $ans->a_body ?></font>
	<p class="hint">
	<?php $date = explode(" ", $ans->add_time)?>
	Date : <?= $date[0] ?> | Time : <?= $date[1] ?> | 
	<?php if(Yii::app()->user->getId() == "admin" || Yii::app()->user->getId() == end($ans_auth) || Yii::app()->user->getId() == end($q_auth)):?>
	<?php echo CHtml::link(CHtml::encode('Delete the answer'), array('answers/delete', 'id'=>$ans->a_id),
  			array(
 		   'submit'=>array('answers/delete', 'id'=>$ans->a_id),
    	   'class' => 'delete','confirm'=>'This will remove the answer. Are you sure?'
  			)
		);?>
	
	<?php endif;?>
	|
	<?php if(Yii::app()->user->getId() != "admin"):
			$voters = array();
			if($ans->vote)
				$voters = explode("|", $ans->vote);
			echo "<b>(".sizeof($voters).")</b>";
	?>
		
			
			<?php 
			if(in_array($current_user_id, $voters))
				echo CHtml::link(CHtml::encode('Down Vote'), array('answers/votedown', 'id'=>$ans->a_id),
  					array(
 		   			'submit'=>array('answers/votedown', 'id'=>$ans->a_id),
    	   			)
				);
			else 
				echo CHtml::link(CHtml::encode('Up Vote'), array('answers/voteup', 'id'=>$ans->a_id),
  					array(
 		   			'submit'=>array('answers/voteup', 'id'=>$ans->a_id),
    	   			)
				);
			?>
		
		
		
		
	<?php endif;?>
	</p>
</div>
<hr>
<?php endforeach;?>
<hr>
<h4>Add a new answer</h4>
<?php $a_model = new Answers;?>
<?php echo $this->renderPartial('_aform', array('model'=>$a_model)); ?>