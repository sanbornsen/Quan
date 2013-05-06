<?php
/* @var $this AnswersController */
/* @var $model Answers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'answers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'q_id'); ?>
		<?php echo $form->textField($model,'q_id'); ?>
		<?php echo $form->error($model,'q_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'a_body'); ?>
		<?php echo $form->textArea($model,'a_body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'a_body'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_time'); ?>
		<?php echo $form->textField($model,'add_time'); ?>
		<?php echo $form->error($model,'add_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->