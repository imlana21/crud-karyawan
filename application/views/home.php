<!DOCTYPE html>
<html>
<head>
	<!-- Materialize CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/materialize.css'); ?>"/>
	<!-- Animate CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css'); ?>"/>
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<!-- Charset Setting -->
	<meta charset="utf-8">
	<!-- Responsive Setting -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Home </title>
</head>
<body id="home">
	<div id="welcomewrapper">
		<span class="welcome bounceInDown animated"> Welcome to Dashboard </span>
		<span style="display: block;"> Website ini dibuat oleh <a href="<?php echo base_url('index.php/Biodata') ?>"> Ihwan Mualana </a></span>
		<br>
		<ul class="menu fadeInDown animated">
			<li> <a href="index.php/karyawan"> Data Karyawan </a> </li>
			<li> <a href="index.php/kehadiran"> Data Kehadiran </a> </li>
			<li> <a href="index.php/jabatan"> Data Jabatan </a> </li>
		</ul>
	</div>
</body>
</html>