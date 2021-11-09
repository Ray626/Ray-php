<?php

include_once "database.php";
session_start();


if(isset($_POST['post_submit'])){
    $title = mysqli_real_escape_string($conn,$_POST['post_title']);
    $content = mysqli_real_escape_string($conn,$_POST['post_content']);
    $user = $_SESSION['u_id'];
    if(empty($content)|| empty($title)||empty($user)){
        header("location:post_page.php?post=empty");
        exit();
    }
    else{
        $sql = "INSERT INTO offical_post(poster_id, title, content, date) VALUE('$user','$title','$content', CURRENT_TIMESTAMP);";
        mysqli_query($conn, $sql);
        header('Location: post_page.php?post=success');
        exit();
    }
}