<?php session_start();
$login="index.php";
$subscribe="signup.php";
$msg = "";
$name = $_SESSION['firstname'];
if ($name!= ""){$msg = '<li class="nav-item"><a class="nav-link text-danger disabled" href="#">Welcome '.$name.'</a></li>';
    
}else {
    $msg = '<li class="nav-item"><a class="nav-link text-danger" href="'.$login.'">Log in</a></li><li class="nav-item"><a class="nav-link text-danger" href="'.$subscribe.'">Subscribe</a></li>';
    //  "<a href='$login'>Log in</a>"." or "."<a href='$subscribe'>Sign up</a>"."</p>";   
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <title>Nextflix</title>

</head>



<body>
    <!--navbar start-->
    <nav class="navbar navbar-expand-lg  navbar-expand-sm navbar-dark" style="background-color: #2d2d2d;">
        <a class="navbar-brand" href="#"><img src="./images/logo.png" href="#" alt="Nextflix logo"></a>
        <button class="navbar-toggler" type="button" class="btn btn-danger" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="home.php">Movies</a>
                        <a class="dropdown-item" href="Series.html">Series</a>  
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-nextflix.php">contact</a>
                </li>
                <?php echo $msg; ?>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <div class="btn-toolbar">
                    <button id="goSearch" type="button" class="btn btn-danger" style="background-color: #761313;">search</button>
                </div>
                <div class="btn-toolbar">
                    <a class="btn btn-danger" href="logout.php" role="button" style="background-color: #761313; margin-left: 9px;">log out</a>
                </div>
            </form>
        </div>
    </nav>
    <!--navbar end-->
   
    <div id="div0" class="posters">
    </div>
    <!--slider start-->
    <div class="home">

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img src="images/avengers.jpg" class="d-block w-100" alt="..."> -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/6ZfuNTqbHE8"></iframe>
                    </div>
                    <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>Action</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div> -->
                </div>
                <div class="carousel-item">
                    <!-- <img src="images/joker.jpg" class="d-block w-100" alt="..."> -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/-_DJEzZk2pc"></iframe>
                    </div>

                    <!-- <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=6ZfuNTqbHE8" allowfullscreen></iframe>
                        </div>  -->
                    <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>Horror</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div> -->
                </div>
                <div class="carousel-item">
                    <!-- <img src="./images/fastandfurious.jpg" class="d-block w-100" alt="..."> -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/b736ZM_KfEk"></iframe>
                    </div>

                    <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>Animation</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div> -->
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <!--slider end-->


    <div class="container" style="padding: 0; max-width: 100%;">

        <div id="div1" class="posters">
            <h1>Latest Movies</h1>
        </div>

        <div id="div2" class="posters">
            <h1>Popular Movies</h1>
        </div>

        <div id="div3" class="posters">
            <h1>Upcoming Movies</h1>
        </div>

        <footer style="max-width: 100%; padding: 2% 20%">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p> © 2020-2021 Company,Inc <a href="#"> Privacy </a> <a href="#"> Terms </a> </p>
        </footer>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="javascript/home.js"></script>

</body>

</html>
