<?php
  session_start();
  include '../static/current-page.php'; 
?>
<!DOCTYPE html>
<html>
	<?php include '../static/template-top.php'; ?>
	<body class="skin-blue">
	    <div class="wrapper">
	      	<?php include '../static/header.php'; ?>
	      	<aside class="main-sidebar">
	        	<?php include '../static/nav-side.php'; ?>
	      	</aside>
	      	<div class="content-wrapper">
	        	<?php include '../static/content-header.php'; ?>
	        	<?php include '../static/database-connector.php'; ?>
				<section class="content">
				    <?php include '../static/alerts.php'; ?>