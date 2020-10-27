<?php
$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	$model->nik,
);

$this->menu=array(
	array('label'=>'List pegawai', 'url'=>array('index')),
	array('label'=>'Create pegawai', 'url'=>array('create')),
	array('label'=>'Update pegawai', 'url'=>array('update', 'id'=>$model->nik)),
	array('label'=>'Delete pegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nik),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage pegawai', 'url'=>array('admin')),
);
?>

<h1>View pegawai #<?php echo $model->nik; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nik',
		'nama',
		'alamat',
		'email',
		'phone',
		'jenkel',
		'createTime',
		'updateTime',
	),
)); ?>
