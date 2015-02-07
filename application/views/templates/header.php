<?php 
//TODO: Templating logic.
$template = "default"
?>

<html>
<head>
<title>RapidRPG</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="/templates/<?php echo $template?>/style.css">
<?php include 'templates/' . $template .'/fonts.php';?>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 class="sitename">RapidRPG</h1>
	<div class="container" id="mainDiv">