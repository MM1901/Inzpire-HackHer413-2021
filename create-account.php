<?php
include('classes/DB.php');

if (isset($_POST['createaccount'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if (!DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {

                if (strlen($username) >= 3 && strlen($username) <= 32) {

                        if (preg_match('/[a-zA-Z0-9_]+/', $username)) {

                                if (strlen($password) >= 6 && strlen($password) <= 60) {

                                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                                        DB::query('INSERT INTO users VALUES (\'\', :username, :password, :email)', array(':username'=>$username, ':password'=>password_hash($password, PASSWORD_BCRYPT), ':email'=>$email));
                                        echo "Success!";
                                        header( "Location: http://localhost/HackHer%202021/dummy.php" );
                                } else {
                                        echo '<span style="color:Tomato;text-align:center;">Invalid email!</span>';
                                }
                        } else {
                                echo '<span style="color:Tomato;text-align:center;">Invalid password!</span>';
                        }
                        } else {
                                echo '<span style="color:Tomato;text-align:center;">Invalid username!</span>';
                        }
                } else {
                        echo '<span style="color:Tomato;text-align:center;">Invalid username!</span>';
                }

        } else {
                echo '<span style="color:Tomato;text-align:center;">User already exists!</span>';
        }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoseSaver</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./signin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #1A1A1A;

        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-light" style="background-color: black;">
            <a class="navbar-brand p-0" href="#">
                <img src="./img/inzpire logo.png" height=50px alt="" loading="lazy">
            </a>

        </nav>
        <div class="row mt-5">
            <div class="col-md-5 my-auto mx-auto">

                <button type="button" class="btn btn-primary twitter">Continue
                    with Twitter</button>
                <button type="button" class="btn btn-secondary google">Continue with Google</button>
                <button type="button" class="btn btn-success facebook">Continue with Facebook</button>
            </div>
            <div class="col-md-7 ">
                <div class="signin">
                    <h4 class="heading">Sign In</h4>
                    <form action="create-account.php" method="post">
                        <div class="form-group">

                            <input type="text" class="form-control emailField" id="exampleInputUsername"
                                placeholder="Username" value="" name="username">

                        </div>
                        <div class="form-group">

                            <input type="password" name="password" value="" class="form-control passwordField" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control emailField" id="exampleInputUsername"
                                placeholder="someone@somesite.com" value="" name="email">

                        </div>

                        <div class="mx-auto">
                            <a href="http://localhost/HackHer%202021/dummy.php" class="login"> <button type="submit" name="createaccount" value="Create Account" class="btn btn-primary login">Sign Up
                            </button></a>
                        </div>
                    </form>
                </div>
                <p class="heading">Already have an account? Log in <a href = "http://localhost/HackHer%202021/login.php" class="here">HERE</a></p>
            </div>
        </div>
    </div>
</body>
