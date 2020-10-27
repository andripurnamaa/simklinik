<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/fontawesome-free/css/all.min.css">
  	<!-- Tempusdominus Bbootstrap 4 -->
  	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  	<!-- iCheck -->
  	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  	<!-- JQVMap -->
  	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/jqvmap/jqvmap.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/admin-lte/adminlte.min.css">
  	<!-- overlayScrollbars -->
  	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  	<!-- Daterange picker -->
  	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/daterangepicker/daterangepicker.css">
  	<!-- summernote -->
  	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/summernote/summernote-bs4.css">
  	<!-- Google Font: Source Sans Pro -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<?php echo  $this->renderPartial('//includes/_navbar'); ?>
		<?php echo  $this->renderPartial('//includes/_aside'); ?>
		<div class="content-wrapper">
			<?php echo $content; ?>
		</div>
	</div>


<!-- jQuery -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/moment/moment.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/adminlte.js"></script>
</body>
</html>