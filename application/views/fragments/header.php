<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Park - <?php echo  $title ?> </title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("vendor/images/favicon.png") ?>">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


	<?php if (isset($datatable) && $datatable) : ?>
		<link href="<?php echo base_url("vendor/plugins/tables/css/datatable/dataTables.bootstrap4.min.css"); ?>" rel="stylesheet">
	<?php endif; ?>

	<link href="<?php echo base_url("vendor/css/style.css"); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/custom.css"); ?>">

</head>

<body class="h-100">
	<div id="preloader">
		<div class="loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
			</svg>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->