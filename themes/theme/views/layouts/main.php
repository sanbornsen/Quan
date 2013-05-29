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
</script>
<body>
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

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo "Team Quan"; ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
