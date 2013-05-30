<?php
/* @var $this QuestionController */
/* @var $data Question */
?>

<div class="view question">

	<b><?php echo CHtml::encode($data->getAttributeLabel('q_body')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->q_body), array('view', 'id'=>$data->q_id)); ?></b>
	<br />
	<?php $q_auth = explode(" ", $data->user_id)?>
	<?php $userinfo = Users::model()->find('username LIKE "'.$q_auth[0].'"');?>
	<?php echo "by ".ucwords($userinfo->f_name)." ".ucwords($userinfo->l_name); ?>
	<?php if($q_auth[0] == "Anonymus") echo CHtml::encode($q_auth[0]); ?>
	<br />
	<?php $answer = Answers::model()->findAll(array("condition"=>"q_id = ".$data->q_id,"order"=>"a_id DESC"));
		  $answer_auth = array();
		  foreach ($answer as $ans):
		  		$ans_auth = explode(" ", $ans->user_id);
		  		if($ans_auth[0] != "Anonymus"){
		  			$name = Users::model()->find("username LIKE '".$ans_auth[0]."'");
		  			$name = ucwords($name->f_name)." ".ucwords($name->l_name);
		  		}
		  		else 
		  			$name = $ans_auth[0];
		  		
		  		if(!in_array($name, $answer_auth))
			  		array_push($answer_auth, $name);
		  endforeach;
		 ?>
		  
		 <div class="hint">
	<?php if (sizeof($answer_auth)==0)
		  	echo "Be the first one to answer this question";
		  elseif (sizeof($answer_auth)==1)
		  	echo "<b>".$answer_auth[0]."</b> has given an answer";
		  elseif (sizeof($answer_auth)==2)
		  	echo "<b>".$answer_auth[0]."</b> and <b>".$answer_auth[1]."</b> have given answers";
		  else 
		  	echo "<b>".$answer_auth[0]."</b>, <b>".$answer_auth[1]."</b> and <b>".(sizeof($answer_auth)-2)."</b> others have given answers";
	?>

	<br>
	<?php $date = explode(" ", $data->add_time)?>
	Date : <?= $date[0] ?> | Time : <?= $date[1] ?>
	</div>
</div>

<hr>
