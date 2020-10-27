<?php
$this->breadcrumbs=array(
	'Pegawais',
);

$this->menu=array(
	array('label'=>'Create pegawai', 'url'=>array('create')),
	array('label'=>'Manage pegawai', 'url'=>array('admin')),
);
?>

<h1>Pegawai</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
