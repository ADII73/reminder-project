<?php
session_start();
?>
<?php
include("./config.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $username_search ="select * from user where username='$username'";
    $query = mysqli_query($con, $username_search);

    $username_count=mysqli_num_rows($query);

    if($username_count){
        $user_pass = mysqli_fetch_assoc($query);

        $db_pass=$user_pass['password'];

        $_SESSION['username'] = $user_pass['username'];

        // $pass_decode = password_verify($password, $db_pass);
        if($password==$db_pass){
            echo "login successful";
            header('location: index.php');
        }
        else{
            header('location: loginfailed.php');
        }
    }
    else{
        header('location: loginfailed.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="shortcut icon" href="assets/img/25231.png" type="image/x-icon"> -->
    <title>Login Page</title>
</head>
<body>
    <div class="p-of-page"></div>
    
    <div class="p-login-sec">
        <div class="container">
            <div class="login-sec">
                <div class="cont-media">
                    <div class="p-logo">
                        <h1>Login</h1>
                    </div>
                    <div class="p-form">
                        <form class="form" action="./login.php" method="post">
                            <input class="e-mail-inpt" name="username" type="text" placeholder="Enter Username">
                            <br>
                            <input class="pass-inpt" name="password" type="password" placeholder="Enter password">
                            <br>
                            <div class="l-parent">
                                <label class="shpass">Show password</label>
                                <input class="chk-box" type="checkbox" id="show-pass">
                            </div>
                            <br>
                            <input class="submit" name="submit" type="submit" value="Submit">
                        </form>
                        <div class="p-border">
                            <div class="border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>