<?php
/* @var $this QuestionController */
/* @var $data Question */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('q_body')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->q_body), array('view', 'id'=>$data->q_id)); ?></b>
	<br />
	<?php $userinfo = Users::model()->find('username LIKE "'.$data->user_id.'"');?>
	<?php echo "by ".$userinfo->f_name." ".$userinfo->l_name; ?>
	(<?php echo CHtml::encode($data->user_id); ?>)
	<br />
	<?php $answer = Answers::model()->findAll("q_id = ".$data->q_id);
		  $answer_auth = array();
		  foreach ($answer as $ans):
		  		$ans_auth = explode("_", $ans->user_id);
		  		if(!in_array($ans_auth[0], $answer_auth))
			  		array_push($answer_auth, $ans_auth[0]);
		  endforeach;
		  if (sizeof($answer_auth)==0)
		  	echo "Be the first one to answer this question";
		  elseif (sizeof($answer_auth)==1)
		  	echo "<b>".$answer_auth[0]."</b> has given an answer";
		  elseif (sizeof($answer_auth)==2)
		  	echo "<b>".$answer_auth[0]."</b> and <b>".$answer_auth[1]."</b> have given answers";
		  else 
		  	echo "<b>".$answer_auth[0]."</b>, <b>".$answer_auth[1]."</b> and <b>".(sizeof($answer_auth)-2)."</b> others have given answers";
	?>
	<br>
	Date : <?= $data->add_time ?>

</div>