<?php
  $title = "GET THING";
  require "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webstore</title>
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--Normal css-->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
  <!--Pictograms-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--JS-->
  <script defer src="<?php echo BASE_URL; ?>/js/code.js"></script>
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>/index.php"><?php echo $title;?></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo BASE_URL; ?>/categories/headsets.php">HEADSETS</a></li>
          <li><a href="<?php echo BASE_URL; ?>/categories/keyboards.php">KEYBOARDS</a></li>
          <li><a href="<?php echo BASE_URL; ?>/categories/monitors.php">MONITORS</a></li>
          <li><a href="<?php echo BASE_URL; ?>/categories/mouses.php">MOUSES</a></li>
        </ul>
      </div>
    </div>
  </nav>