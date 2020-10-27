<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obat-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stok'); ?>
		<?php echo $form->textField($model,'stok'); ?>
		<?php echo $form->error($model,'stok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_jual'); ?>
		<?php echo $form->textField($model,'harga_jual'); ?>
		<?php echo $form->error($model,'harga_jual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_beli'); ?>
		<?php echo $form->textField($model,'harga_beli'); ?>
		<?php echo $form->error($model,'harga_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_satuan'); ?>
		<?php echo $form->textField($model,'id_satuan'); ?>
		<?php echo $form->error($model,'id_satuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createTime'); ?>
		<?php echo $form->textField($model,'createTime'); ?>
		<?php echo $form->error($model,'createTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateTime'); ?>
		<?php echo $form->textField($model,'updateTime'); ?>
		<?php echo $form->error($model,'updateTime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->