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
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php echo $content; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
