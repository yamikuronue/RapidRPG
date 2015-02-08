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
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">RapidRPG</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <?php foreach ($menu as $item) {
          	echo "<li><a href=" .site_url($item["slug"]) . ">" .ucfirst($item["name"]) ."</a></li>";
          }
          
          ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php          
			if ($loggedin) { 
				echo '<li><a href="'.site_url("logout").'">Logout</a></li>';
			} else {
				echo '<li><a href="'.site_url("login").'">Login</a></li>';
			}?>
		   </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<h1 class="sitename">RapidRPG</h1>
	<div class="container" id="mainDiv">