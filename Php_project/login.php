<?php
include_once "database.php";



if(isset($_POST['submit_login'])) {
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    if(empty($username)||empty($password)){
        header("location:Login_page.php?login=empty");
        exit();
    }
    else{
        $sql1 = "SELECT * FROM offical_users WHERE username = '$username';";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck1 = mysqli_num_rows($result1);
        if($resultCheck1 < 1){
            header("location:Login_page.php?login=username_invalid");
            exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result1)){
                $hashedPwdCheck = password_verify($password, $row['password_hashed']);
                if($hashedPwdCheck == false){
                    header("location:Login_page.php?login=password_invalid");
                    exit();
                }
                else{
                    session_start();
                    $_SESSION['u_id'] = $row['id'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_username'] = $row['username'];
                    $_SESSION['u_password'] = $row['password'];
                    header("location:index.php?login=success");
                    exit();

                }
            }
        }
    }
}
else{
    header("Location:../Login_page.php");
}
