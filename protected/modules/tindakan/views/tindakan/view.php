<?php
$this->breadcrumbs=array(
	'Tindakans'=>array('index'),
	$model->id_tindakan,
);

$this->menu=array(
	array('label'=>'List tindakan', 'url'=>array('index')),
	array('label'=>'Create tindakan', 'url'=>array('create')),
	array('label'=>'Update tindakan', 'url'=>array('update', 'id'=>$model->id_tindakan)),
	array('label'=>'Delete tindakan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tindakan),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage tindakan', 'url'=>array('admin')),
);
?>

<h1>View tindakan #<?php echo $model->id_tindakan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tindakan',
		'nama',
		'keterangan',
		'createTime',
		'updateTime',
	),
)); ?>
