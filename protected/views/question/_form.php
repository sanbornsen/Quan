<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form CActiveForm */
?>

<div class="form">
<script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row_lpad">
		<?php echo $form->labelEx($model,'q_body'); ?>
		<?php echo $form->textArea($model,'q_body',array('id'=>'TestForm_textarea','class'=>'span9')); ?>
		<?php echo $form->error($model,'q_body'); ?>
	</div>

	<div class="row_lpad">
		<?php echo $form->labelEx($model,'q_desc'); ?>
		<?php echo $form->textArea($model,'q_desc',array('id'=>'editor2', 'rows'=>6, 'cols'=>100)); ?>
		<?php echo $form->error($model,'q_desc'); ?>
	</div>

	<div class="row_lpad buttons">
		<input type="checkbox" name="anonyn"> Ask as anonymus  
		<hr>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ask' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
    CKEDITOR.replace( 'editor2' );
    $("#add").click(function(){
            var $a=$("#select").val();
            var $b=$("#textfield2").val();
            if($b=='')
            {
            	$("#textfield2").val($a);   
            }
            else
            {
            	$("#textfield2").val($b+", "+$a);
            }
            $("#select").val('');
            $("#select").focus();
    });
</script>