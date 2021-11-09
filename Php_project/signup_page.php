<?php
 include "header.php";
include_once "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<body>
<div class="container justify-content-center container-form">
    <form action="signup.php" method="POST" class="l&s_form">
        <p class="form-title">Email:</p>
        <label>
            <input type="email" name="email" placeholder="Email Address" class="rs_input">
        </label>
        <p class="form-title">User Name</p>
        <label>
            <input type="text" name="username" placeholder="Username" class="rs_input">
        </label>
        <p class="form-title">Password:</p>
        <label>
            <input type="password" name="password" placeholder="Password" class="rs_input">
        </label>
        <p class="form-title">Confirm Password:</p>
        <label>
            <input type="password" name="confirm_Password" placeholder="Confirm Password" class="rs_input">
        </label>
        <button type="submit" name="submit_signup" class="rs_button">Sign up</button>

    </form>
</div>
<?php
    if(isset($_GET['signup'])) {
        $value  = $_GET['signup'];
        switch ($value){
            case "empty":
                echo "<div class='alert alert-danger d-flex justify-content-center' style='margin: 10px 40%' role='alert'>
                       Form is empty
                       </div>";
                break;
            case "error_Username":
                echo "<div class='alert alert-danger d-flex justify-content-center' style='margin: 10px 40%' role='alert'>
                       Username is used
                       </div>";
                break;
            case "error_Email":
                echo "<div class='alert alert-danger d-flex justify-content-center' style='margin: 10px 40%' role='alert'>
                        Email is used
                        </div>";
                break;
            case "error_Password";
                echo "<div class='alert alert-danger d-flex justify-content-center' style='margin: 10px 40%' role='alert'>
                        Password is not matched
                        </div>";
                break;
            case "success";
                echo "<div class='alert alert-success d-flex justify-content-center' style='margin: 10px 40%' role='alert'>
                        Signup success
                        </div>";
                break;

        }
    }

?>

</body>
</html>