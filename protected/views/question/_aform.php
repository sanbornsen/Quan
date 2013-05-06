<?php
/* @var $this AnswersController */
/* @var $model Answers */
/* @var $form CActiveForm */
?>

<div class="form">
<script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'answers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'a_body'); ?>
		<?php echo $form->textArea($model,'a_body',array('id'=>'editor1', 'rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'a_body'); ?>
	</div>

	<div class="row buttons">
		<input type="checkbox" name="anonyn"> Answer as anonymus
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Answer' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
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