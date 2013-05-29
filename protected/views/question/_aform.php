<?php
/* @var $this AnswersController */
/* @var $model Answers */
/* @var $form CActiveForm */
?>

<div class="form" style="padding-left:30px">
<script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'answers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->textArea($model,'a_body',array('id'=>'editor1',)); ?>
		<?php echo $form->error($model,'a_body'); ?>
	</div>

	<div class="row buttons" style="padding-top:10px">
		<input type="checkbox" name="anonyn"> <span style="font-size:10px"><b>Answer as anonymus</b></span> 
		
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Answer' : 'Save',array('class'=>'btn btn-primary')); ?>
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