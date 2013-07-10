<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form" id="myform" autocomplete="off">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'users-form',
    'enableAjaxValidation'=>false,
	'action'=>Yii::app()->baseUrl."/users/updatepart/".$model->user_id,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	)); ?>
<?php if($model->image == "unknown.jpg"):?>
<?php echo $form->errorSummary($model); ?>
	<div class="well">
		<?php 
		echo $form->labelEx($model, 'image');
		echo $form->fileField($model, 'image',array('class'=>'span3','style'=>'height:26px'));
		echo $form->error($model, 'image');
	?>
	</div>
<?php endif;?>


<h3> Education:</h3>
<div id="edu"  class="well">
<?php 
	$i = 0;
	$edu = json_decode($model->education,true); 
	if(sizeof($edu)):?>
	<?php for($i=0;$i<sizeof($edu);$i++):?>
	<?php $education = explode("|",$edu["education".($i+1)]);?>
	<div  id="education<?= $i+1 ?>">
		<label for="Users_education">
	      Education-<?= $i+1 ?>
	    </label>
	    <input class="span3" id="autocomplete_college_<?= $i+1 ?>" onclick="setAutoComplete('autocomplete_college_<?= $i+1 ?>', 'ac_college_<?= $i+1 ?>', '/quan/institution/search?sugg=')" type="text" name="Users[college][]" value="<?= $education[0] ?>" placeholder="Institution Name" autocomplete="off" maxlength="50" size="20"></input>
		<div id = "ac_college_<?= $i+1 ?>" class="span3 ac_college" style="position: absolute; margin-left: 0px; margin-top: 10px; display:none"></div>
		<input class="span3" type="text" name="Users[course][]" value="<?= $education[1] ?>" placeholder="Course Name" maxlength="50" size="20"></input>
		<input class="span1" type="text" name="Users[course_from][]" value="<?= $education[2] ?>" placeholder="From" maxlength="5" size="7"></input>
		<input class="span1" type="text" name="Users[course_to][]" value="<?= $education[3] ?>" placeholder="To" maxlength="5" size="7"></input> <br>
	</div>
	<?php endfor;?>
	<?php endif;?>
	<div id="education<?= $i+1 ?>">
		<label for="Users_education">
	      Education-<?= $i+1 ?>
	    </label>
	    <input class="span3" type="text" id="autocomplete_college_<?= $i+1 ?>" onclick="setAutoComplete('autocomplete_college_<?= $i+1 ?>', 'ac_college_<?= $i+1 ?>', '/quan/institution/search?sugg=')" name="Users[college][]" placeholder="Institution Name" autocomplete="off" maxlength="50" size="20"></input>
		<div id = "ac_college_<?= $i+1 ?>" class="span3 ac_college" style="position: absolute; margin-left: 0px; margin-top: 10px; display:none"></div>
		<input class="span3" type="text" name="Users[course][]" placeholder="Course Name" maxlength="50" size="20"></input>
		<input class="span1" type="text" name="Users[course_from][]" placeholder="From" maxlength="5" size="7"></input>
		<input class="span1" type="text" name="Users[course_to][]" placeholder="To" maxlength="5" size="7"></input> <br>
		<span id="addmore_edu"><a href='javascript:addeduField(<?= $i+1 ?>)'>add more</a></span>
	</div>
</div>



<h3>Job:</h3>
<div id="job" class="well"><?php 
	$j = 0;
	$jb = json_decode($model->job,true); 
	if(sizeof($jb)):?>
	<?php for($j=0;$j<sizeof($jb);$j++):?>
	<?php $job = explode("|",$jb["job".($j+1)]);?>
	<div  id="job<?= $j+1 ?>">
		<label for="Users_job">
	      Education-<?= $j+1 ?>
	    </label>
	    <input class="span3" id="autocomplete_company_<?= $j+1 ?>" onclick="setAutoComplete('autocomplete_company_<?= $j+1 ?>', 'ac_company_<?= $j+1 ?>', '/quan/company/search?sugg=')" type="text" name="Users[company][]" value="<?= $job[0] ?>" placeholder="Company" autocomplete="off" maxlength="50" size="20"></input>
		<div id = "ac_company_<?= $j+1 ?>" class="span3 ac_college" style="position: absolute; margin-left: 0px; margin-top: 10px; display:none"></div>
		<input class="span3" type="text" name="Users[post][]" value="<?= $job[1] ?>" placeholder="Current Post" maxlength="50" size="20"></input>
		<input class="span1" type="text" name="Users[job_from][]" value="<?= $job[2] ?>" placeholder="From" maxlength="5" size="7"></input>
		<input class="span1" type="text" name="Users[job_to][]" value="<?= $job[3] ?>" placeholder="To" maxlength="5" size="7"></input> <br>
	</div>
	<?php endfor;?>
	<?php endif;?>
	<div id="job<?= $j+1 ?>">
		<label for="Users_job">
	      Job-<?= $j+1 ?>
	    </label>
	    <input class="span3" id="autocomplete_company_<?= $j+1 ?>" onclick="setAutoComplete('autocomplete_company_<?= $j+1 ?>', 'ac_company_<?= $j+1 ?>', '/quan/company/search?sugg=')" type="text" name="Users[company][]" placeholder="Company" autocomplete="off" maxlength="50" size="20"></input>
		<div id = "ac_company_<?= $j+1 ?>" class="span3 ac_college" style="position: absolute; margin-left: 0px; margin-top: 10px; display:none"></div>
		<input class="span3" type="text" name="Users[post][]" placeholder="Current Post" maxlength="50" size="20"></input>
		<input class="span1" type="text" name="Users[job_from][]" placeholder="From" maxlength="5" size="7"></input>
		<input class="span1" type="text" name="Users[job_to][]" placeholder="To" maxlength="5" size="7"></input> <br>
		<span id="addmore_job"><a href='javascript:addjobField(<?= $j+1 ?>)'>add more</a></span> 
	</div>
</div>



<hr>
<?php 
 $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit'));
$this->endWidget();
?>

</div>
