<?php
$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	$model->nik=>array('view','id'=>$model->nik),
	'Update',
);

$this->menu=array(
	array('label'=>'List pegawai', 'url'=>array('index')),
	array('label'=>'Create pegawai', 'url'=>array('create')),
	array('label'=>'View pegawai', 'url'=>array('view', 'id'=>$model->nik)),
	array('label'=>'Manage pegawai', 'url'=>array('admin')),
);
?>

<h1>Update pegawai <?php echo $model->nik; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>