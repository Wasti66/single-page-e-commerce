<?php
	include('baseurl.php');
?>
<!doctype html>
<html>
	<head>
	   <meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <title>Single Page E-commerce</title>
	   <!-- === tailwindcss output css === -->
	   <link href="<?php echo $baseurl;?>css/output.css" rel="stylesheet">
	   <!--Fontawesome-->
	   <link rel="stylesheet" type="text/css" href="<?php echo $baseurl;?>css/all.css"/>
	   <!-- swiper js css -->
       <link rel="stylesheet" href="<?php echo $baseurl;?>css/swiper-bundle.min.css"/>
	   <!-- style css -->
       <link rel="stylesheet" href="<?php echo $baseurl;?>css/style.css"/>
	   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
	</head>
	<body class="bg-gray-50" x-data="cartComponent()">