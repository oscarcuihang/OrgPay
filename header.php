<?php 
  //include '../../database.php'; 
	if(!session_start())
		die("Error: fail to start session");
	$conn = mysql_connect("localhost", "root", "root");
	mysql_select_db("orgpay", $conn);
    mysql_set_charset('utf8',$conn);
    echo "asd";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Road Trip Planner</title>

    <!-- Bootstrap core CSS -->
    <link href="..../bootstrap/style/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="..../bootstrap/style/css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="..../bootstrap/style/assets/js/ie-emulation-modes-warning.js"></script>

	<!-- Navigation bar css		-->
	<link href = "..../bootstrap/style/css/rtp.css" rel = "stylesheet"/>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  