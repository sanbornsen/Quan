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

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row_lpad">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'inpfield',)); ?>
		<?php echo $form->error($model,'username',array('class'=>'inpfield_error')); ?>
	</div>

	<div class="row_lpad">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'inpfield',)); ?>
		<?php echo $form->error($model,'password',array('class'=>'inpfield_error')); ?>
		
	</div>
	
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	<hr> 	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Login',array('class'=>'inpfield',)); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
