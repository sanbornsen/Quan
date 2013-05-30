<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
	

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



function waitPreloadPage() { //DOM
if (document.getElementById){
document.getElementById('prepage').style.visibility='hidden';
}else{
if (document.layers){ //NS4
document.prepage.visibility = 'hidden';
}
else { //IE4
document.all.prepage.style.visibility = 'hidden';
}
}
}
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
<body onLoad="waitPreloadPage();">
<DIV id="prepage" style="position:absolute; font-family:arial; font-size:16; left:0px; top:0px; background-color:white; layer-background-color:white; height:100%; width:100%;"> 
<TABLE width=100%><TR><TD><B>Loading ... ... Please wait!</B></TD></TR></TABLE>
</DIV>
<?php 
if(!Yii::app()->user->isGuest && Yii::app()->user->getId()!='admin'){
	$user = Users::model()->find("username LIKE '".Yii::app()->user->getId()."'");
	$last_not = Notification::model()->findAll("not_id > ".$user->last_not." AND person1 NOT LIKE '".$user->username."'");
	$not_num = " (".count($last_not).")";
}
?>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
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

<div class="container" id="page">
	<?php if(!Yii::app()->user->isGuest):?>
           <center>
                <form action="<?= $this->createAbsoluteUrl('site/search') ?>" method="GET" id="search-form" autocomplete="off">
				<select class="styled-select" id="TestForm_dropdown" name="choice">
					<option value="People">People</option>
					<option value="Question">Question</option>
				</select>
				<?php $this->widget('CAutoComplete', array(
                            'name'=>'search',
                            'id'=>'input-box',
                            'attribute'=>'search',
                            'url'=> $this->createAbsoluteUrl('products/suggestions'),
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
		Copyright &copy; <?php echo date('Y'); ?> by Quanz.<br/>
		All Rights Reserved.<br/>
		<?php echo "Team Quanz"; ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>


