<?php
include('classes/DB.php');

if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {

                if (password_verify($password, DB::query('SELECT password FROM users WHERE username=:username', array(':username'=>$username))[0]['password'])) {
                        echo '<span style="color:#AFA;text-align:center;">Logged in!</span>';
                        header( "Location: http://localhost/HackHer%202021/dummy.php" );
                } else {
                        echo '<span style="color:Tomato;text-align:center;">Incorrect Password!</span>';
                }

        } else {
                echo '<span style="color:Tomato;text-align:center;">User not registered!</span>';
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
                    <form action="login.php" method="post">
                        <div class="form-group">

                            <input type="text" class="form-control emailField" id="exampleInputUsername"
                                placeholder="Username" value="" name="username">

                        </div>
                        <div class="form-group">

                            <input type="password" name="password" value="" class="form-control passwordField" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="mx-auto">
                            <a href="./home.html" class="login"> <button type="submit" name="login" value="Login" class="btn btn-primary login">Log
                                    In</button></a>
                        </div>
                    </form>
                </div>
                <p class="heading">Don't have an account? Sign up <a href = "http://localhost/HackHer%202021/create-account.php" class="here">HERE</a></p>
            </div>
        </div>
    </div>
</body>