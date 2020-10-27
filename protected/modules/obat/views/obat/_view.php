<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_obat), array('view', 'id'=>$data->id_obat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok')); ?>:</b>
	<?php echo CHtml::encode($data->stok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_jual')); ?>:</b>
	<?php echo CHtml::encode($data->harga_jual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_beli')); ?>:</b>
	<?php echo CHtml::encode($data->harga_beli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_satuan')); ?>:</b>
	<?php echo CHtml::encode($data->id_satuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createTime')); ?>:</b>
	<?php echo CHtml::encode($data->createTime); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updateTime')); ?>:</b>
	<?php echo CHtml::encode($data->updateTime); ?>
	<br />

	*/ ?>

</div>