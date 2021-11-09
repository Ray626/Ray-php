<?php
include_once "database.php";

if(isset($_POST['submit_signup'])) {
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $c_password = mysqli_real_escape_string($conn,$_POST['confirm_Password']);
    if(empty($email)|| empty($username)||empty($password)){
        header("location:signup_page.php?signup=empty");
        exit();
    }
    else{
        $sql1 = "SELECT * FROM offical_users WHERE username = '$username';";
        $sql2 = "SELECT * FROM offical_users WHERE email = '$email'; ";
        $result1 = mysqli_query($conn, $sql1);
        $result2 = mysqli_query($conn, $sql2);
        $resultCheck1 = mysqli_num_rows($result1);
        $resultCheck2 = mysqli_num_rows($result2);
        if($resultCheck1 > 0){
            header("Location: signup_page.php?signup=error_Username");
            exit();
        }
        elseif($resultCheck2 > 0){
            header("Location: signup_page.php?signup=error_Email");
            exit();
        }
        elseif($password != $c_password){
            header("Location: signup_page.php?signup=error_Password");
            exit();
        }
        else{
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO offical_users(email, username, password, password_hashed) VALUE ('$email','$username','$password','$hashedPwd');";
            mysqli_query($conn, $sql);
            header("Location: signup_page.php?signup=success");
            exit();

        }
    }



}
else{
    header("Location:../signup-page.php");
}

