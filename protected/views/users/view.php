<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List Questions', 'url'=>array('question/index')),
	array('label'=>'Ask Question', 'url'=>array('question/create')),
	array('label'=>'Edit Profile', 'url'=>array('users/update')),
);
?>
<div class="span3"></div>
<span style="font-size:15pt"><?php echo Users::model()->findNameByUserid($model->user_id); ?></span>
<?php if(Yii::app()->user->getId() != $model->username):?>
 | 
 <?php if(!in_array($model->user_id,$following)):?>
 	<a id="follow_<?=$model->user_id?>" href="javascript:userfollow(<?=$model->user_id?>,'<?=ucwords($model->f_name)?>')" class="btn btn-primary btn-mini">Follow <?=ucwords($model->f_name)?></a>
 <?php else:?>
 	<a id="follow_<?=$model->user_id?>" href="javascript:userfollow(<?=$model->user_id?>,'<?=ucwords($model->f_name)?>')" class="btn btn-mini">Unfollow <?=ucwords($model->f_name)?></a>
 <?php endif;?>
<?php endif;?>
<div class="span9" style="margin-left:-20px">
	<div class="span3">
		<img alt="<?= $model->f_name." ".$model->l_name ?>" src="<?= Yii::app()->baseUrl."/images/users/".$model->image ?>" style="max-height:200px; max-width:200px; float:left; border-style:solid; border-width:2px" >
	</div>
	<div class="span5" >
	    <?php 
	    if($model->education != "")
	    	$education = json_decode($model->education);?>
	    <?php if(isset($education) && sizeof($education)):?>
	    <h5>Education : </h5>
	    <ul>
	    <?php 
	   		foreach ($education as $edu):
	   			$split = explode("|",$edu);
	   			$college_name = $split[0];
	   			$course = $split[1];
	   			$from_yr = $split[2];
	   			$to_yr = $split[3];
	   			if(strtotime($to_yr) >= strtotime(date("d-m-Y"))):
	   		?>
	   		<li> Persuing <?= $course ?> from <b><?= $college_name ?></b>.</li>
	   		<?php else:?>
	    	<li> Studied <?= $course ?> from <b><?= $college_name ?></b>.</li>
	    	<?php endif;
	    	endforeach;?>
	    </ul>
	    <?php endif;?>
	    
	    
	    <?php 
	    if($model->job != "")
	    	$job = json_decode($model->job);?>
	    <?php if(isset($job) && sizeof($job)):?>
	    <h5>Work : </h5>
	    <ul>
	    <?php 
	   		foreach ($job as $j):
	   			$split = explode("|",$j);
	   			$company_name = $split[0];
	   			$post = $split[1];
	   			$from_yr = $split[2];
	   			$to_yr = $split[3];
	   			if(strtotime($to_yr) >= strtotime(date("d-m-Y"))):
	   		?>
	   		<li> Working at <b><?= $company_name ?></b> as <?= $post ?>.</li>
	   		<?php else:?>
	    	<li> Worked at <b><?= $company_name ?></b> as <?= $post ?>.</li>
	    	<?php endif;
	    	endforeach;?>
	    </ul>
	    <?php endif;?>
	</div>
</div>

<div>
		<?php if(sizeof($dataProvider)>0):?>
			<h4> Questions asked by <?= ucwords($model->f_name) ?></h4>
		<?php endif;?>
		<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_viewquestion',
		)); ?>
</div>


<hr>