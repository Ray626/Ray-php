<?php
    include_once "database.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instaaaaagram</title>
    <link rel="stylesheet" href="bootstrap-5.1.1-dist/css/bootstrap.css">
    <script src="bootstrap-5.1.1-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
<?php


if(isset($_SESSION['u_id'])){
    if(empty($_SESSION['u_id'])){
        include "header_signin.php";
    }

    else{
        include "header_signout.php";

    }
}
else{
    include "header_signin.php";

}
?>








