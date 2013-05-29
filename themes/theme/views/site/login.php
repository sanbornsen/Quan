<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="form well">
<div class="span5">
<h3><span style="padding-left:30px">Login</span></h3>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array('class'=>'span5'),
)); ?>

	<div class="row_lpad">
		<?php //echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'inpfield','placeholder'=>'username')); ?>
		<?php echo $form->error($model,'username',array('class'=>'inpfield_error')); ?>
	</div>

	<div class="row_lpad">
		<?php //echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'inpfield','placeholder'=>'password')); ?>
		<?php echo $form->error($model,'password',array('class'=>'inpfield_error')); ?>
		
	</div>
	
	<div class="row_lpad rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<span class ="hint" style="font-size:10px">Remember me next time</span>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	<div class="row_lpad buttons" style="padding-top:10px">
		<?php //echo CHtml::submitButton('Login',array('class'=>'inpfield','type'=>'primary',)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Login')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
<?php $user = new Users;?>
<?php echo $this->renderPartial('_regform', array('model'=>$user)); ?>

</div><!-- form -->
<br>

