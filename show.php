<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/challenge.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <style>
        body {
            background-color: #1A1A1A;

        }
    </style>
</head>

	<body>
		<!-------------------Main Content------------------------------>
        <nav class="navbar navbar-expand-lg navbar-dark" style=" background-color: black;">
        <a class="navbar-brand p-0" href="#">
            <img src="./img/inzpire logo.png" height=50px alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link orange" href="./home.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link orange" href="http://localhost/HackHer%202021/upload-design.php">Post a challenge</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link orange" href="http://localhost/HackHer%202021/show.php" tabindex="-1">Projects</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 searchBar" type="search" placeholder="Search" aria-label="Search">

            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item icons">
                    <i class="material-icons sms">sms</i>
                </li>
                <li class="nav-item icons">
                    <i class="material-icons notifications">notifications</i>

                </li>


                <li class="nav-item icons">
                    <i class="material-icons help">help</i>

                </li>
                <li class="nav-item icons">
                <a href = "./profile.html"><i class="material-icons account_circle">account_circle</i></a>

                </li>
            </ul>
        </div>
    </nav>
    <?php
	
    /*-- we included connection files--*/
    include "connection.php";

    $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
    mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
    $image_query = mysqli_query($result,"select img_name,img_path from image_table");
    while($rows = mysqli_fetch_array($image_query))
    {
        $img_name = $rows['img_name'];
        $img_src = $rows['img_path'];
    ?>
    <div class="container ">
        <div class="head">
            <h3>Epicer</h3>
            <p>#Health</p>
            <p>37 projects Ongoing</p>
        </div>
        <div class="mx-auto">
            <a href="./home.html" class="submit" style="display: inline;margin-right: 30px;"> <button type="submit"
                    class="btn btn-primary submit" style="display: inline; ">Take
                    Challenge</button></a>
            <a href="./projects.html" class="submit" style="display: inline;"> <button type="submit"
                    class="btn btn-primary submit" style="display: inline;">Project
                    Gallery</button></a>
        </div>
        <div style="text-align: center;"><img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" class="img-responsive" width="80%"/>
                <p><strong><?php echo $img_name; ?></strong></p></div>
        
                <div class="descrip mx-auto">
            <h3>Description</h3>
            <p>Cooking meals at home is something everyone does. It could be out of necessity or just because one likes to cook.
                Though everyone wants to eat home-cooked meals rather than takeout because it's healthier.
                But we don't always have the required groceries for a particular recipe. We all have been in the situation where we 
                want to make something but the fridge just has some random ingredients in it. 
                Even during the pandemic, it is sometimes difficult to get the groceries and we have to adjust with whatever is available to us.
                 But putting together something from those random ingredients proves to be a challenge. I would appreciate all the help I can get</p>
        </div>

        <?php
	}
?>
       

    </div>
                   

	</body>
	</html>