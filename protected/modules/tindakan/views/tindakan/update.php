<?php
$this->breadcrumbs=array(
	'Tindakans'=>array('index'),
	$model->id_tindakan=>array('view','id'=>$model->id_tindakan),
	'Update',
);

$this->menu=array(
	array('label'=>'List tindakan', 'url'=>array('index')),
	array('label'=>'Create tindakan', 'url'=>array('create')),
	array('label'=>'View tindakan', 'url'=>array('view', 'id'=>$model->id_tindakan)),
	array('label'=>'Manage tindakan', 'url'=>array('admin')),
);
?>

<h1>Update tindakan <?php echo $model->id_tindakan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>