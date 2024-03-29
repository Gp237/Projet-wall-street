<?php

	// Error Reporting

	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	include 'admin/connect.php';

	$sessionUser = '';
	$sessionAvatar = '';
	
	if (isset($_SESSION['user'])) {
		$sessionUser = $_SESSION['user'];
		$sessionAvatar = $_SESSION['avatar'];
	}

	// Routes

	$tpl 	= 'include/templates/'; // Template Directory
	$lang 	= 'include/languages/'; // Language Directory
	$func	= 'includes/functions/'; // Functions Directory
	$css 	= 'layouts/css/'; // Css Directory
	$js 	= 'layouts/js/'; // Js Directory

	// Include The Important Files

	include $func . 'functions.php';
	include $lang . 'english.php';
	include $tpl . 'header.php';
	

	