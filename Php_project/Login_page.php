<?php
include "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<body>
<div class="container justify-content-center container-form">

    <form action="login.php" method="POST" class="l&s_form">
        <p class="form-title">User Name</p>
        <label>
            <input type="text" name="username" placeholder="Username" class="rs_input">
        </label>
        <p class="form-title">Password:<a href="#" style="font-size: 13px; padding-left: 40px ">Forgot password?</a></p>
        <label>
            <input type="password" name="password" placeholder="Password" class="rs_input">
        </label>
        <button type="submit" name="submit_login" class="rs_button">log in</button>

        <p>Don't have a account?<a href="signup_page.php" >sign up</a></p>

    </form>
</div>

<?php
    if(isset($_GET['login'])) {
        $value  = $_GET['login'];
        switch ($value){
            case "empty":
                echo "<div class='alert alert-danger d-flex justify-content-center' style='margin: 10px 40%' role='alert'>
                       Form is empty
                       </div>";
                break;
            case "username_invalid":
                echo "<div class='alert alert-danger d-flex justify-content-center' style='margin: 10px 40%' role='alert'>
                       Username or password is invalid
                       </div>";
                break;
            case "password_invalid":
                echo "<div class='alert alert-danger d-flex justify-content-center' style='margin: 10px 40%' role='alert'>
                        Username or password is used
                        </div>";
                break;
        }
    }
?>

</body>
</html>