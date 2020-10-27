<?php
$this->breadcrumbs=array(
	'Tindakans',
);

$this->menu=array(
	array('label'=>'Create tindakan', 'url'=>array('create')),
	array('label'=>'Manage tindakan', 'url'=>array('admin')),
);
?>

<h1>Tindakans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
