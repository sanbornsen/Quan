<?php
/* @var $this AnswersController */
/* @var $model Answers */

$this->breadcrumbs=array(
	'Answers'=>array('index'),
	$model->a_id,
);

$this->menu=array(
	array('label'=>'List Question', 'url'=>array('question/index')),
	array('label'=>'Create Questions', 'url'=>array('question/create')),
);
?>

<h2><?php echo $q_model->q_body; ?></h2>
<?php if($q_model->q_desc != ''):?>
		<h4>
			<b>Description:</b><?= $q_model->q_desc ?>
		</h4>
<?php endif;?>
<?php $date = explode(" ", $q_model->add_time)?>
<p class="hint">Date : <?= $date[0] ?> | Time : <?= $date[1] ?></p>
<hr>

<h3><b>Answers :</b></h3>
	

<?php
$q_auth = explode(" ",$q_model->user_id);
$ans_auth = explode(" ", $model->user_id);
if($model->user_id != "admin"){
	 
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
	<h4><b><?= $usr ?> </b> says : </h4>
	<font size="3"><?= $model->a_body ?></font>
	<p class="hint">
	<?php $date = explode(" ", $model->add_time)?>
	Date : <?= $date[0] ?> | Time : <?= $date[1] ?> | 
	<?php if(Yii::app()->user->getId() == "admin" || Yii::app()->user->getId() == end($ans_auth) || Yii::app()->user->getId() == end($q_auth)):?>
	<?php echo CHtml::link(CHtml::encode('Delete the answer'), array('answers/delete', 'id'=>$model->a_id),
  			array(
 		   'submit'=>array('answers/delete', 'id'=>$model->a_id),
    	   'class' => 'delete','confirm'=>'This will remove the answer. Are you sure?'
  			)
		);?>
	
	<?php endif;?>
	|
	<?php if(Yii::app()->user->getId() != "admin"):
			$voters = array();
			if($model->vote)
				$voters = explode("|", $model->vote);
			echo "<b>(".sizeof($voters).")</b>";
	?>
		
			
			<?php 
			if(in_array($current_user_id, $voters))
				echo CHtml::link(CHtml::encode('Down Vote'), array('answers/votedown', 'id'=>$model->a_id),
  					array(
 		   			'submit'=>array('answers/votedown', 'id'=>$model->a_id),
    	   			)
				);
			else 
				echo CHtml::link(CHtml::encode('Up Vote'), array('answers/voteup', 'id'=>$model->a_id),
  					array(
 		   			'submit'=>array('answers/voteup', 'id'=>$model->a_id),
    	   			)
				);
			?>
		
		
		
		
	<?php endif;?>
	</p>
</div>
<hr>
<?php echo CHtml::link(CHtml::encode("View all answers"), array('question/view', 'id'=>$q_model->q_id));?>