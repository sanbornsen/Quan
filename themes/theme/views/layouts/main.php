<?php 
if(!Yii::app()->user->isGuest && Yii::app()->user->getId()!='admin'){
	$user = Users::model()->find("user_id = ".Users::model()->findIdByUsername(Yii::app()->user->getId()));
	$last_not = Notification::model()->findAll("not_id > ".$user->last_not." AND person1 != ".$user->user_id);
	$not_num = " (".count($last_not).")";
}
else{
	$not_num = "";
}
?>

<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/autocomplete.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap-fileupload.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap-select.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap-select.css" />
    
    
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/dimensions.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/autocomplete.js"></script>
	
	<?php if(isset($last_not)):?>
		<title><?php echo $not_num.CHtml::encode($this->pageTitle); ?></title>
	<?php else: ?>
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php endif;?>

	<?php Yii::app()->bootstrap->register(); ?>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap-fileupload.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap-select.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap-select.min.js"></script>


</head>
<script>
function voteUp(vote,id,baseurl)
{
var xmlhttp;
var id1 = "voting"+id;
var id2 = "voteup"+id;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(id2).innerHTML=xmlhttp.responseText;
	if(vote == 1){
		document.getElementById(id1).innerHTML="Down Vote";
		$("#"+id1).removeClass("label-success");
		$("#"+id1).addClass("label-important");
		$("#"+id1).attr("onClick","voteUp(0,"+id+",'"+baseurl+"')");
		}
	else{
		document.getElementById(id1).innerHTML="Up Vote";
		$("#"+id1).removeClass("label-important");
		$("#"+id1).addClass("label-success");
		$("#"+id1).attr("onClick","voteUp(1,"+id+",'"+baseurl+"')");
		}
	}
  }
 if(vote == 1)
	xmlhttp.open("GET",baseurl+"/answers/voteup/"+id,true);
else
	xmlhttp.open("GET",baseurl+"/answers/votedown/"+id,true);
xmlhttp.send();
}


function addeduField($id){ //Education form
	 var parent = document.getElementById("education"+$id);
	 var remove = document.getElementById("addmore_edu");
	 parent.removeChild(remove);
	 var $func = "setAutoComplete('autocomplete_college_"+($id+1)+"', 'ac_college_"+($id+1)+"', '<?=Yii::app()->baseUrl?>/institution/search?sugg=')";
	 var funcf = "date('edpf_"+($id+1)+"')";
	 var funct = "date('edpt_"+($id+1)+"')";
	 var date = '<?=date('d-m-Y')?>';
	 var newContent = '<div id="education'+($id+1)+'">';
	 newContent += '<label for="Users_education">Education-'+($id+1)+'</label>';
	 newContent +='<input class="span3" id="autocomplete_college_'+($id+1)+'" onclick="'+$func+'" type="text" name="Users[college][]" placeholder="Institution Name" autocomplete="off" maxlength="200" size="20"></input>';
	 newContent +='<div id = "ac_college_'+($id+1)+'" class="span3 ac_college" style="position: absolute; margin-left:-5px; margin-top: 10px; display:none"></div><input style="margin-left:5px" class="span3" type="text" name="Users[course][]" placeholder="Course Name" maxlength="150" size="20"></input>';
	 newContent +='<div style="padding-left:6px" data-date-format="dd-mm-yyyy" data-date="'+date+'" id="edpf_'+($id+1)+'" class="input-append date">';
	 newContent +='<input type="text" name="Users[course_from][]" readonly="" value="" placeholder="From Date" size="16" class="span2">';
	 newContent +='<span class="add-on" onclick="'+funcf+'"><i class="icon-calendar"></i></span></div>';
     newContent +='<div style="padding-left:6px" data-date-format="dd-mm-yyyy" data-date="'+date+'" id="edpt_'+($id+1)+'" class="input-append date">';
	 newContent +='<input type="text" name="Users[course_to][]" readonly="" value="" placeholder="To Date" size="16" class="span2">';
	 newContent +='<span class="add-on" onclick="'+funct+'"><i class="icon-calendar"></i></span>';
	 newContent +='</div><span id="addmore_edu"><a href="javascript:addeduField('+($id+1)+')">add more</a></span></div>';
	 $("#edu").append(newContent); 
}



function addjobField($id){ //Job form
	 var parent = document.getElementById("job"+$id);
	 var remove = document.getElementById("addmore_job");
	 var funcf = "date('jdpf_"+($id+1)+"')";
	 var funct = "date('jdpt_"+($id+1)+"')";
	 var date = '<?=date('d-m-Y')?>';
	 parent.removeChild(remove);
	 var $func = "setAutoComplete('autocomplete_company_"+($id+1)+"', 'ac_company_"+($id+1)+"', '<?=Yii::app()->baseUrl?>/company/search?sugg=')";
	 var newContent = '<div id="job'+($id+1)+'"><label for="Users_job">Job-'+($id+1)+'</label><input class="span3" id="autocomplete_company_'+($id+1)+'" onclick="'+$func+'" type="text" name="Users[company][]" placeholder="Company" autocomplete="off" maxlength="50" size="20"></input><div id = "ac_company_'+($id+1)+'" class="span3 ac_college" style="position: absolute; margin-left: 0px; margin-top: 10px; display:none"></div><input style="margin-left:5px" class="span3" type="text" name="Users[post][]" placeholder="Current Post" maxlength="50" size="20"></input>';
	 //newComment += '<input class="span1" type="text" name="Users[job_from][]" placeholder="From" maxlength="5" size="7"></input><input class="span1" type="text" name="Users[job_to][]" placeholder="To" maxlength="5" size="7"></input> <br>';
	 
	 newContent +='<div style="padding-left:6px" data-date-format="dd-mm-yyyy" data-date="'+date+'" id="jdpf_'+($id+1)+'" class="input-append date">';
	 newContent +='<input type="text" name="Users[job_from][]" readonly="" value="" placeholder="From Date" size="16" class="span2">';
	 newContent +='<span class="add-on" onclick="'+funcf+'"><i class="icon-calendar"></i></span></div>';
     newContent +='<div style="padding-left:6px" data-date-format="dd-mm-yyyy" data-date="'+date+'" id="jdpt_'+($id+1)+'" class="input-append date">';
	 newContent +='<input type="text" name="Users[job_to][]" readonly="" value="" placeholder="To Date" size="16" class="span2">';
	 newContent +='<span class="add-on" onclick="'+funct+'"><i class="icon-calendar"></i></span>';
	 newContent +='</div><span id="addmore_job"><a href="javascript:addjobField('+($id+1)+')">add more</a></span></div>';
	 $("#job").append(newContent); 
}


function verify()
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("verification_reply").innerHTML=xmlhttp.responseText;
    }
  }
var baseurl = '<?php echo Yii::app()->baseUrl; ?>';
var code = document.getElementById("verify").value;
xmlhttp.open("GET",baseurl+"/users/verify?code="+code,true);
xmlhttp.send();
}

</script>

<script>
	function date(id){
    $('#'+id+'').datepicker('show');
	}
	
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.fileupload').fileupload();
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.selectpicker').selectpicker();
});
</script>


<script type="text/javascript">
$(document).ready(function(){
    var defaultSearchVal = "Search for Questions";

    $('.searchClickClear').focus(function(){
        curDefaultVal = $(this).val();
        if(curDefaultVal==defaultSearchVal)
            $(this).val('');
    });

    $('.searchClickClear').blur(function(){
        if ($(this).val() == "") {
            $(this).val(defaultSearchVal);
        }
    });
});
</script>
<?php if(isset($_SESSION['verify'])):?>
	<body onload="verify_modal()">
<?php else:?>
	<body>
<?php endif;?>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
        		array('label'=>'Profile', 'url'=>array('/'.urlencode(Yii::app()->user->getId())), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Notification'.$not_num, 'url'=>array('/question/notification'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<script type="text/javascript">
	function srch(val){
		if(val == 'People'){
			document.getElementById('search-form').setAttribute('action','<?= $this->createAbsoluteUrl('users/search') ?>');
		}
		else{
			document.getElementById('search-form').setAttribute('action','<?= $this->createAbsoluteUrl('question/search') ?>');
		}
	}
	
</script>
<div class="container" id="page">
	<?php if(!Yii::app()->user->isGuest):?>
           <center>
                <form action="<?= $this->createAbsoluteUrl('question/search') ?>" method="GET" id="search-form" autocomplete="off">
				<select onchange="javascript:srch(this.value)" class="selectpicker" data-width="100px" id="TestForm_dropdown" name="choice">
					<option value="Question">Question</option>
					<option value="People">People</option>
				</select>
				<?php $this->widget('CAutoComplete', array(
                            'name'=>'search',
                            'id'=>'input-box',
                            'attribute'=>'search',
                            'url'=> $this->createAbsoluteUrl('question/suggestions'),
                            'value'=>'Search for Questions',
                            'minChars'=>2,
                            'scroll'=>false,
                            'resultsClass'=>'searchAutoComplete ac_results',
                            'htmlOptions'=> array('class'=>"searchClickClear span5"),
                            'methodChain'=>'.result(function(){$("form#search-form").submit();})'
                    )); ?>
                    <input type="submit" class="srchbtn btn-primary" style="margin-top:-10px; margin-left:-76px" id="submit-button" value="Search"/>
                </form>
            </center>
    <?php endif;?>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Sudipta Sen.<br/>
		All Rights Reserved.<br/>
		<?php echo "Team Quanz"; ?>
	</div><!-- footer -->

</div><!-- page -->

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Verify Your Email</h3>
	</div>
	<div class="modal-body">
		<p>Please enter the verification code you have got through mail. If you haven't recieve any mail from us then click here to resend. Not verifying your email will lead to deletion of this profile within 24 hours.</p>
		<input type='text' name='verify' id='verify' placeholder="Code here"/> </br> <button class="btn btn-primary" onClick="verify()">Verify</button> </br>	</div>
	<div class="modal-footer">
		<span style="float:left" id="verification_reply"></span>
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>

</body>

<script>
function verify_modal()
{
$('#myModal').modal('show');
}
</script>

</html>


