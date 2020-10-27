<?php
$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List pegawai', 'url'=>array('index')),
	array('label'=>'Manage pegawai', 'url'=>array('admin')),
);
?>

<h1>Create pegawai</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>