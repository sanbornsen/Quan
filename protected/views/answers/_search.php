<?php
/* @var $this AnswersController */
/* @var $model Answers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'a_id'); ?>
		<?php echo $form->textField($model,'a_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'q_id'); ?>
		<?php echo $form->textField($model,'q_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a_body'); ?>
		<?php echo $form->textArea($model,'a_body',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'add_time'); ?>
		<?php echo $form->textField($model,'add_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->