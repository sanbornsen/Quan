<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	'Questions'=>array('index'),
	$model->q_id,
);
$q_auth = explode(" ",$model->user_id);
if(end($q_auth) == Users::model()->findIdByUsername(Yii::app()->user->getId())){
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
<?php $date = explode(" ", $model->add_time)?>
<p class="hint">by <?= Users::model()->findNameByUserid($model->user_id) ?>  Date : <?= $date[0] ?> | Time : <?= $date[1] ?></p>
<?php if($model->q_desc != ''):?>
			<b>Description:</b>
			<br><?= $model->q_desc ?>
<?php endif;?>
<hr>

<h3><b>Answers :</b></h3>
	
<?php foreach ($answers as $ans):?>
<?php
$ans_auth = explode(" ", $ans->user_id);
$username = Users::model()->findByUserid($ans_auth[0]);
$usr = Users::model()->findNameByUserid($ans->user_id);
?>
<div style="margin:5px; max-width:70px; float:left;padding-right:20px">
	<div style="height:90px;width:50px">
		<?php if($username):?>
			<img alt="<?=$ans_auth[0]?>" src="<?= Yii::app()->baseUrl.'/images/users/thumbs/thumb_'.$username->image ?>" height="80px" width="50px"></img>
		<?php else:?>
			<img alt="<?=$ans_auth[0]?>" src="<?= Yii::app()->baseUrl.'/images/users/unknown.jpg' ?>" height="70px" width="50px"></img>
		<?php endif;?>
	</div>
</div>
<div>
	<?php if($username):?>
	<h4><b><a href=<?= Yii::app()->baseUrl."/".$username->username?>><?= $usr ?></a></b> <?= CHtml::link(CHtml::encode("says"), array('answers/view', 'id'=>$ans->a_id));?> : </h4>
	<?php else:?>
	<h4><b><?= $usr ?></b> <?= CHtml::link(CHtml::encode("says"), array('answers/view', 'id'=>$ans->a_id));?> : </h4>
	<?php endif;?>
	<font size="3"><?= $ans->a_body ?></font>
	<p class="hint">
	<?php $date = explode(" ", $ans->add_time)?>
	Date : <?= $date[0] ?> | Time : <?= $date[1] ?> | 
	<?php if(Yii::app()->user->getId() == "admin" || Users::model()->findIdByUsername(Yii::app()->user->getId()) == end($ans_auth) || Users::model()->findIdByUsername(Yii::app()->user->getId()) == end($q_auth)):?>
	
	
	<?php echo CHtml::link(CHtml::encode('Delete'), array('answers/delete', 'id'=>$ans->a_id),
  			array(
 		   'submit'=>array('answers/delete', 'id'=>$ans->a_id),
    	   'class' => 'label label-inverse','confirm'=>'This will remove the answer. Are you sure?'
  			)
		);?>
	
	<?php endif;?>
	
	<?php if(Yii::app()->user->getId() != "admin"):
			$voters = array();
			if($ans->vote)
				$voters = explode("|", $ans->vote);
	?>
		
			
	<?php 
	if(in_array($current_user_id, $voters)){

	?>
	<a class="label label-important"  id="voting<?= $ans->a_id ?>" onclick='voteUp(0,<?= $ans->a_id ?>,"<?= Yii::app()->baseUrl ?>")'> Down Vote </a>
	<?php
	}
	else{ 

	?>
    <a class="label label-success"  id="voting<?= $ans->a_id ?>" onclick='voteUp(1,<?= $ans->a_id ?>,"<?= Yii::app()->baseUrl ?>")'> Up Vote </a>
    
    <?php 
	}
	echo "&nbsp&nbsp&nbsp<span id='voteup".$ans->a_id."' class='badge badge-inverse'>".sizeof($voters)."</span>";
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

