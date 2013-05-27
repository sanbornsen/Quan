<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'users-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
   /* 
    'clientOptions' => array(
		'validateOnSubmit'=>true,
		'validateOnChange'=>true,		
		'validateOnType'=>true,
		),*/
    'htmlOptions'=>array('class'=>'well'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
		<?php //echo $form->labelEx($model,'f_name'); ?>
		<?php echo $form->textField($model,'f_name',array('class'=>'span3','size'=>20,'maxlength'=>50, 'placeholder'=>'First Name')); ?>
		<?php echo $form->error($model,'f_name',array('class'=>'inpfield_error')); ?>
		<br>	
		<?php //echo $form->labelEx($model,'l_name'); ?>
		<?php echo $form->textField($model,'l_name',array('class'=>'span3','size'=>20,'maxlength'=>50, 'placeholder'=>'Last Name')); ?>
		<?php echo $form->error($model,'l_name',array('class'=>'inpfield_error')); ?>
		<br>	
		<?php //echo $form->labelEx($model,'email_id'); ?>
		<?php echo $form->textField($model,'email_id',array('class'=>'span3','size'=>20,'maxlength'=>50, 'placeholder'=>'Email ID')); ?>
		<?php echo $form->error($model,'email_id',array('class'=>'inpfield_error')); ?>
		<br>
		<?php //echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'span3','size'=>20,'maxlength'=>50, 'placeholder'=>'Choose an username')); ?>
		<?php echo $form->error($model,'username',array('class'=>'inpfield_error')); ?>
		<br>
	<?php if($model->isNewRecord):?>
		<?php //echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'span3','size'=>20,'maxlength'=>50,'placeholder'=>'password')); ?>
		<?php echo $form->error($model,'password',array('class'=>'inpfield_error')); ?>
	<?php endif;?>
	
		
<br><hr>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
