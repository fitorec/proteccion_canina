<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title><?php echo $title_for_layout; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
	?>

  <!-- Stylesheets -->
  <link href="<?php echo Router::url('/'); ?>style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="<?php echo Router::url('/'); ?>style/font-awesome.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="<?php echo Router::url('/'); ?>style/jquery-ui-1.9.2.custom.min.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="<?php echo Router::url('/'); ?>style/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="<?php echo Router::url('/'); ?>style/prettyPhoto.css">  
  <!-- Star rating -->
  <link rel="stylesheet" href="<?php echo Router::url('/'); ?>style/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="<?php echo Router::url('/'); ?>style/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="<?php echo Router::url('/'); ?>style/jquery.cleditor.css"> 
  <!-- Uniform -->
  <link rel="stylesheet" href="<?php echo Router::url('/'); ?>style/uniform.default.html"> 
  <!-- Uniform -->
  <link rel="stylesheet" href="<?php echo Router::url('/'); ?>style/daterangepicker-bs3.css" />
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="<?php echo Router::url('/'); ?>style/bootstrap-switch.css">
  <!-- Main stylesheet -->
  <link href="<?php echo Router::url('/'); ?>style/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="<?php echo Router::url('/'); ?>style/widgets.css" rel="stylesheet">   
    <!-- Gritter Notifications stylesheet -->
  <link href="<?php echo Router::url('/'); ?>style/jquery.gritter.css" rel="stylesheet">   
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="<?php echo Router::url('/'); ?>js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
</head>

<body>
<?php echo $this->element('topMenu'); ?>
<div class="content">

  	<!-- Sidebar -->
    <?php echo $this->element('sidebar'); ?>
    <!-- Sidebar ends -->

  	<!-- Main bar -->
  	<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
	      <h2 class="pull-left">Dashboard</h2>
        <div class="pull-right">
           <div id="reportrange" class="pull-right">
              <i class="fa fa-calendar"></i>
              <span></span> <b class="caret"></b>
           </div>
        </div>
        <div class="clearfix"></div>
        <!-- Breadcrumb -->
        <div class="bread-crumb">
          <a href="index.html"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Dashboard</a>
        </div>
        
        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->
	    <!-- Matter -->
	    <div class="matter">
        <div class="container">
          <?php echo $this->Session->flash(); ?>
          <?php echo $this->fetch('content'); ?>
        </div>
		  </div>
		<!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<?php echo $this->element('footer'); ?>


<!-- JS -->
<script src="<?php echo Router::url('/'); ?>js/jquery.js"></script> <!-- jQuery -->
<script src="<?php echo Router::url('/'); ?>js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="<?php echo Router::url('/'); ?>js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="<?php echo Router::url('/'); ?>js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="<?php echo Router::url('/'); ?>js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="<?php echo Router::url('/'); ?>js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

<!-- Morris JS -->
<script src="<?php echo Router::url('/'); ?>js/raphael-min.js"></script>
<script src="<?php echo Router::url('/'); ?>js/morris.min.js"></script>

<!-- jQuery Flot -->
<script src="<?php echo Router::url('/'); ?>js/excanvas.min.js"></script>
<script src="<?php echo Router::url('/'); ?>js/jquery.flot.js"></script>
<script src="<?php echo Router::url('/'); ?>js/jquery.flot.resize.js"></script>
<script src="<?php echo Router::url('/'); ?>js/jquery.flot.pie.js"></script>
<script src="<?php echo Router::url('/'); ?>js/jquery.flot.stack.js"></script>

<!-- jQuery Notification - Noty -->
<script src="<?php echo Router::url('/'); ?>js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="<?php echo Router::url('/'); ?>js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="<?php echo Router::url('/'); ?>js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="<?php echo Router::url('/'); ?>js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="<?php echo Router::url('/'); ?>js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<!-- Daterangepicker -->
<script src="<?php echo Router::url('/'); ?>js/moment.min.js"></script>
<script src="<?php echo Router::url('/'); ?>js/daterangepicker.js"></script>

<script src="<?php echo Router::url('/'); ?>js/sparklines.js"></script> <!-- Sparklines -->
<script src="<?php echo Router::url('/'); ?>js/jquery.gritter.min.js"></script> <!-- jQuery Gritter -->
<script src="<?php echo Router::url('/'); ?>js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="<?php echo Router::url('/'); ?>js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="<?php echo Router::url('/'); ?>js/jquery.uniform.min.html"></script> <!-- jQuery Uniform -->
<script src="<?php echo Router::url('/'); ?>js/jquery.slimscroll.min.js"></script> <!-- jQuery SlimScroll -->
<script src="<?php echo Router::url('/'); ?>js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
<script src="<?php echo Router::url('/'); ?>js/filter.js"></script> <!-- Filter for support page -->
<script src="<?php echo Router::url('/'); ?>js/custom.js"></script> <!-- Custom codes -->
<script src="<?php echo Router::url('/'); ?>js/charts.js"></script> <!-- Charts & Graphs -->

<script src="<?php echo Router::url('/'); ?>js/index.js"></script> <!-- Index Javascripts -->

<?php
  echo $this->fetch('css');
  echo $this->fetch('script');
  echo $this->element('sql_dump');
?>
</body>
</html>
