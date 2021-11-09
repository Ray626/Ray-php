<?php
include_once "database.php";


if(isset($_POST['like_button'])) {
    $post_id = $_POST['the_post_id'];
    $sql="SELECT * FROM offical_post WHERE post_id = '$post_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $num = $row['thumb_up'];
    $num1 = $num + 1;
    $sql1 = "UPDATE offical_post SET thumb_up ='$num1' WHERE post_id = '$post_id';";
    mysqli_query($conn, $sql1);
    header('Location: index.php?success');
    exit();



}