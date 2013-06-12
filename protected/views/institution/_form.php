<?php
/* @var $this InstitutionController */
/* @var $model Institution */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'institution-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'inst_name'); ?>
		<?php echo $form->textField($model,'inst_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'inst_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inst_add'); ?>
		<?php echo $form->textArea($model,'inst_add',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'inst_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inst_website'); ?>
		<?php echo $form->textField($model,'inst_website',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'inst_website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inst_about'); ?>
		<?php echo $form->textArea($model,'inst_about',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'inst_about'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inst_follower'); ?>
		<?php echo $form->textArea($model,'inst_follower',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'inst_follower'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inst_logo'); ?>
		<?php echo $form->textField($model,'inst_logo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'inst_logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inst_student'); ?>
		<?php echo $form->textArea($model,'inst_student',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'inst_student'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inst_creator'); ?>
		<?php echo $form->textArea($model,'inst_creator',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'inst_creator'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->