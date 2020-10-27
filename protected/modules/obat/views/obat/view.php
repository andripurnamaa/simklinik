<?php
$this->breadcrumbs=array(
	'Obats'=>array('index'),
	$model->id_obat,
);

$this->menu=array(
	array('label'=>'List obat', 'url'=>array('index')),
	array('label'=>'Create obat', 'url'=>array('create')),
	array('label'=>'Update obat', 'url'=>array('update', 'id'=>$model->id_obat)),
	array('label'=>'Delete obat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_obat),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage obat', 'url'=>array('admin')),
);
?>

<h1>View obat #<?php echo $model->id_obat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_obat',
		'nama',
		'stok',
		'harga_jual',
		'harga_beli',
		'id_satuan',
		'createTime',
		'updateTime',
	),
)); ?>
