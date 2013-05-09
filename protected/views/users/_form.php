<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    
   /* 'clientOptions' => array(
		'validateOnSubmit'=>true,
		'validateOnChange'=>true,		
		'validateOnType'=>true,
		),*/
    'htmlOptions'=>array('class'=>'well'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
		<?php echo $form->labelEx($model,'f_name'); ?>
		<?php echo $form->textField($model,'f_name',array('class'=>'span3','size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'f_name',array('class'=>'inpfield_error')); ?>
	
	
		<?php echo $form->labelEx($model,'l_name'); ?>
		<?php echo $form->textField($model,'l_name',array('class'=>'span3','size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'l_name',array('class'=>'inpfield_error')); ?>
	
		<?php echo $form->labelEx($model,'email_id'); ?>
		<?php echo $form->textField($model,'email_id',array('class'=>'span3','size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email_id',array('class'=>'inpfield_error')); ?>

		<?php echo $form->labelEx($model,'username')." <font color='red'>(give your wifi userid here, e.g. <b>sudipta_it13_2010</b>)</font><br>"; ?>
		<?php echo $form->textField($model,'username',array('class'=>'span3','size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'username',array('class'=>'inpfield_error')); ?>
	
	<?php if($model->isNewRecord):?>
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'span3','size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password',array('class'=>'inpfield_error')); ?>
	<?php endif;?>
	
		<?php echo $form->labelEx($model,'batch'); ?>
		<?php echo $form->dropDownList($model,'batch',array('2009-2013'=>'2009-2013','2010-2014'=>'2010-2014','2011-2015'=>'2011-2015','2012-2016'=>'2012-2016',), array('class'=>'span3','prompt'=>'Select Batch',)); ?>
		<?php echo $form->error($model,'batch',array('class'=>'inpfield_error')); ?>

		<?php echo $form->labelEx($model,'stream'); ?>
		<?php echo $form->dropDownList($model,'stream',array('CSE'=>'CSE','IT'=>'IT','BT'=>'BT','ECE'=>'ECE','EEE'=>'EEE','ME'=>'ME','MRE'=>'MRE',), array('class'=>'span3','prompt'=>'Select Stream',)); ?>
		<?php echo $form->error($model,'stream',array('class'=>'inpfield_error')); ?>
		<?php echo $form->labelEx($model,'roll'); ?>
		<?php echo $form->textField($model,'roll',array('class'=>'span3',)); ?>
		<?php echo $form->error($model,'roll',array('class'=>'inpfield_error')); ?>
<br><hr>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
