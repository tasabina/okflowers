<?php
    require_once 'admin/connection.php';
    $link = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD, DATABASE_NAME)
    or die ("<p> Error connection to Data base:". mysqli_error()."</p>");
    mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysqli_error()."</p>");
    $date = new DateTime();
    mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysqli_error()."</p>");
?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Okflowers</title>

    <link rel="shortcut icon" href="app/images/ok_favicon.png">

    <link rel="stylesheet" type="text/css" href="app/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="app/site.css" />

    <link rel="stylesheet" type="text/css" href="app/magister.css" />

    <link rel="stylesheet" type="text/css" href="app/lightbox.css" />

    <script src="app/scripts/modernizr-2.6.2.js"></script>

    <!-- Fonts -->

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Pacifico" rel="stylesheet">

</head>