<?php
$this->breadcrumbs=array(
	'Obats'=>array('index'),
	$model->id_obat=>array('view','id'=>$model->id_obat),
	'Update',
);

$this->menu=array(
	array('label'=>'List obat', 'url'=>array('index')),
	array('label'=>'Create obat', 'url'=>array('create')),
	array('label'=>'View obat', 'url'=>array('view', 'id'=>$model->id_obat)),
	array('label'=>'Manage obat', 'url'=>array('admin')),
);
?>

<h1>Update obat <?php echo $model->id_obat; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>