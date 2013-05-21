<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sim'); ?>
		<?php echo $form->textField($model,'sim',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berlaku'); ?>
		<?php echo $form->textField($model,'berlaku'); ?>
		<?php echo $form->error($model,'berlaku'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telp'); ?>
		<?php echo $form->textField($model,'telp',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipe'); ?>
		<?php echo $form->textField($model,'tipe'); ?>
		<?php echo $form->error($model,'tipe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'design'); ?>
		<?php echo $form->textField($model,'design'); ?>
		<?php echo $form->error($model,'design'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comfort'); ?>
		<?php echo $form->textField($model,'comfort'); ?>
		<?php echo $form->error($model,'comfort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'performance'); ?>
		<?php echo $form->textField($model,'performance'); ?>
		<?php echo $form->error($model,'performance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'features'); ?>
		<?php echo $form->textField($model,'features'); ?>
		<?php echo $form->error($model,'features'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->