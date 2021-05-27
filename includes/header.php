<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style type="text/css">
		body
		{
			background-image:url('bg.png');
      background-repeat: no-repeat;
      background-size:cover;
		}
    .bg-gray {
    background-color: #99ffff; /* gray */
    }
	  </style>
    <title>Aplikasi Air Isi Ulang - <?php echo $title ?> </title>
  </head>
  <body>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-gray shadow">
      <a class="navbar-brand" href="index.php">App Aminang</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          </div>
          <div class="navbar-nav ml-auto">
          <?php 
              if(!isset($_SESSION['username'])){
          ?>
            <a class="nav-item nav-link text-dark btn btn-warning" href="login.php">Login <span class="sr-only">(current)</span></a>
          <?php } else { ?>
            <a class="nav-item nav-link text-dark" href="#"><span>Hallo <?php echo $_SESSION['username'] ?> </span> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link text-dark btn btn-danger" href="logout.php">Logout <span class="sr-only">(current)</span></a>
          <?php } ?>
        </div>
      </div>
    </nav>
    <link rel="includes" type="text/css" href="bg.css">
    <div class="container">
    
    
    <br/>