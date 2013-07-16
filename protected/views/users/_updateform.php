<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form" id="myform" autocomplete="off">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'users-form',
    'enableAjaxValidation'=>false,
	'action'=>Yii::app()->baseUrl."/users/update",
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	)); ?>

<div class="fileupload fileupload-new" data-provides="fileupload">
	<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?=Yii::app()->baseUrl?>/images/users/<?=$model->image?>" /></div>
	<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
	<div>
	<span class="btn btn-file"><span class="fileupload-new">Change image</span><span class="fileupload-exists">Change</span><input type="file" name="image" /></span>
	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
	</div>
</div>


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
	    <input class="span3" id="autocomplete_college_<?= $i+1 ?>" onclick="setAutoComplete('autocomplete_college_<?= $i+1 ?>', 'ac_college_<?= $i+1 ?>', '<?=Yii::app()->baseUrl?>//institution/search?sugg=')" type="text" name="Users[college][]" value="<?= $education[0] ?>" placeholder="Institution Name" autocomplete="off" maxlength="50" size="20"></input>
		<div id = "ac_college_<?= $i+1 ?>" class="span3 ac_college" style="position: absolute; margin-left: 0px; margin-top: 10px; display:none"></div>
		<input class="span3" type="text" name="Users[course][]" value="<?= $education[1] ?>" placeholder="Course Name" maxlength="50" size="20"></input>
		
		<div data-date-format="dd-mm-yyyy" data-date="<?=date('d-m-Y')?>" id="edpf_<?=$i+1?>" class="input-append date">
		 <input type="text" name="Users[course_from][]" readonly="" value="<?= $education[2] ?>" size="16" class="span2">
		 <span class="add-on" onclick="date('edpf_<?=$i+1?>')"><i class="icon-calendar"></i></span>
		</div>
         
		<div data-date-format="dd-mm-yyyy" data-date="<?=date('d-m-Y')?>" id="edpt_<?=$i+1?>" class="input-append date">
		 <input type="text" name="Users[course_to][]" readonly="" value="<?= $education[3] ?>" size="16" class="span2">
		 <span class="add-on" onclick="date('edpt_<?=$i+1?>')"><i class="icon-calendar"></i></span>
		</div>
	
	</div>
	<?php endfor;?>
	<?php endif;?>
	<div id="education<?= $i+1 ?>">
		<label for="Users_education">
	      Education-<?= $i+1 ?>
	    </label>
	    <input class="span3" type="text" id="autocomplete_college_<?= $i+1 ?>" onclick="setAutoComplete('autocomplete_college_<?= $i+1 ?>', 'ac_college_<?= $i+1 ?>', '<?=Yii::app()->baseUrl?>/institution/search?sugg=')" name="Users[college][]" placeholder="Institution Name" autocomplete="off" maxlength="200" size="20"></input>
		<div id = "ac_college_<?= $i+1 ?>" class="span3 ac_college" style="position: absolute; margin-left: 0px; margin-top: 10px; display:none"></div>
		<input class="span3" type="text" name="Users[course][]" placeholder="Course Name" maxlength="150" size="20"></input>
		
	    <div data-date-format="dd-mm-yyyy" data-date="<?=date('d-m-Y')?>" id="edpf_<?=$i+1?>" class="input-append date">
		 <input type="text" name="Users[course_from][]" placeholder="From Date" readonly="" value="" size="16" class="span2">
		 <span class="add-on" onclick="date('edpf_<?=$i+1?>')"><i class="icon-calendar"></i></span>
		</div>
         
		<div data-date-format="dd-mm-yyyy" data-date="<?=date('d-m-Y')?>" id="edpt_<?=$i+1?>" class="input-append date">
		 <input type="text" name="Users[course_to][]" readonly="" placeholder="To Date" value="" size="16" class="span2">
		 <span class="add-on" onclick="date('edpt_<?=$i+1?>')"><i class="icon-calendar"></i></span>
		</div>
          
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
	    <input class="span3" id="autocomplete_company_<?= $j+1 ?>" onclick="setAutoComplete('autocomplete_company_<?= $j+1 ?>', 'ac_company_<?= $j+1 ?>', '<?=Yii::app()->baseUrl?>/company/search?sugg=')" type="text" name="Users[company][]" value="<?= $job[0] ?>" placeholder="Company" autocomplete="off" maxlength="50" size="20"></input>
		<div id = "ac_company_<?= $j+1 ?>" class="span3 ac_college" style="position: absolute; margin-left: 0px; margin-top: 10px; display:none"></div>
		<input class="span3" type="text" name="Users[post][]" value="<?= $job[1] ?>" placeholder="Current Post" maxlength="50" size="20"></input>
		
		<div data-date-format="dd-mm-yyyy" data-date="<?=date('d-m-Y')?>" id="jdpf_<?=$j+1?>" class="input-append date">
		 <input type="text" name="Users[job_from][]" placeholder="From Date" readonly="" value="<?= $job[2] ?>" size="16" class="span2">
		 <span class="add-on" onclick="date('jdpf_<?=$j+1?>')"><i class="icon-calendar"></i></span>
		</div>
         
		<div data-date-format="dd-mm-yyyy" data-date="<?=date('d-m-Y')?>" id="jdpt_<?=$j+1?>" class="input-append date">
		 <input type="text" name="Users[job_to][]" readonly="" placeholder="To Date" value="<?= $job[3] ?>" size="16" class="span2">
		 <span class="add-on" onclick="date('jdpt_<?=$j+1?>')"><i class="icon-calendar"></i></span>
		</div>
	</div>
	<?php endfor;?>
	<?php endif;?>
	<div id="job<?= $j+1 ?>">
		<label for="Users_job">
	      Job-<?= $j+1 ?>
	    </label>
	    <input class="span3" id="autocomplete_company_<?= $j+1 ?>" onclick="setAutoComplete('autocomplete_company_<?= $j+1 ?>', 'ac_company_<?= $j+1 ?>', '<?=Yii::app()->baseUrl?>/company/search?sugg=')" type="text" name="Users[company][]" placeholder="Company" autocomplete="off" maxlength="50" size="20"></input>
		<div id = "ac_company_<?= $j+1 ?>" class="span3 ac_college" style="position: absolute; margin-left: 0px; margin-top: 10px; display:none"></div>
		<input class="span3" type="text" name="Users[post][]" placeholder="Current Post" maxlength="50" size="20"></input>
		
		<div data-date-format="dd-mm-yyyy" data-date="<?=date('d-m-Y')?>" id="jdpf_<?=$j+1?>" class="input-append date">
		 <input type="text" name="Users[job_from][]" placeholder="From Date" readonly="" value="" size="16" class="span2">
		 <span class="add-on" onclick="date('jdpf_<?=$j+1?>')"><i class="icon-calendar"></i></span>
		</div>
         
		<div data-date-format="dd-mm-yyyy" data-date="<?=date('d-m-Y')?>" id="jdpt_<?=$j+1?>" class="input-append date">
		 <input type="text" name="Users[job_to][]" readonly="" placeholder="To Date" value="" size="16" class="span2">
		 <span class="add-on" onclick="date('jdpt_<?=$j+1?>')"><i class="icon-calendar"></i></span>
		</div>
		<span id="addmore_job"><a href='javascript:addjobField(<?= $j+1 ?>)'>add more</a></span> 
	</div>
</div>



<hr>
<?php 
 $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit'));
$this->endWidget();
?>

</div>
