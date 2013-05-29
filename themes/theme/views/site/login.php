<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

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
	<hr> 	
	<div class="row_lpad buttons">
		<?php //echo CHtml::submitButton('Login',array('class'=>'inpfield','type'=>'primary',)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Login')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
