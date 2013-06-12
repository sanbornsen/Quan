<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'com_name'); ?>
		<?php echo $form->textField($model,'com_name',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'com_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_add'); ?>
		<?php echo $form->textArea($model,'com_add',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'com_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_logo'); ?>
		<?php echo $form->textField($model,'com_logo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'com_logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_emp'); ?>
		<?php echo $form->textArea($model,'com_emp',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'com_emp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_follower'); ?>
		<?php echo $form->textArea($model,'com_follower',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'com_follower'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_about'); ?>
		<?php echo $form->textArea($model,'com_about',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'com_about'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_creator'); ?>
		<?php echo $form->textField($model,'com_creator',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'com_creator'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->