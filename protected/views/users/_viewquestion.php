<?php
/* @var $this QuestionController */
/* @var $data Question */
?>

<div class="view question">
	<div style="margin:5px; max-width:70px; float:left;padding-right:20px">
	<?php $q_auth = explode(" ", $data->user_id)?>
	<?php $userinfo = Users::model()->findByUserid($q_auth[0]);?>
		<div style="height:90px;width:50px">
			<?php if($userinfo):?>
				<img alt="<?=$q_auth[0]?>" src="<?= Yii::app()->baseUrl.'/images/users/thumbs/thumb_'.$userinfo->image ?>" height="80px" width="50px"></img>
			<?php else:?>
				<img alt="<?=$q_auth[0]?>" src="<?= Yii::app()->baseUrl.'/images/users/unknown.jpg' ?>" height="70px" width="50px"></img>
			<?php endif;?>
		</div>
	</div>
	<b><?php echo CHtml::link(CHtml::encode($data->q_body), array('question/view', 'id'=>$data->q_id)); ?></b>
	<br />
	
	<?php echo "by " ?>
	<?php 
		$author = Users::model()->findNameByUserid($data->user_id);
		echo $author;
	 ?>
	<br />
	<?php $answer = Answers::model()->findAll(array("condition"=>"q_id = ".$data->q_id,"order"=>"a_id DESC"));
		  $answer_auth = array();
		  foreach ($answer as $ans):
		  		$name = Users::model()->findNameByUserid($ans->user_id);
		  		if(!in_array($name, $answer_auth))
			  		array_push($answer_auth, $name);
		  endforeach;
		 ?>
		  
		 <div class="hint">
	<?php if (sizeof($answer_auth)==0)
		  	echo "Be the first one to answer this question";
		  elseif (sizeof($answer_auth)==1)
		  	echo $answer_auth[0]." has given an answer";
		  elseif (sizeof($answer_auth)==2)
		  	echo $answer_auth[0]." and ".$answer_auth[1]." have given answers";
		  else 
		  	echo $answer_auth[0].", ".$answer_auth[1]." and ".(sizeof($answer_auth)-2)." others have given answers";
	?>

	<br>
	<?php $date = explode(" ", $data->add_time)?>
	Date : <?= $date[0] ?> | Time : <?= $date[1] ?> 	
	</div>
</div>

<hr>
