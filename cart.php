<?php
include_once './db/connection.php';
$object= new Connection();
$connection= $object->Connect();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce * Organic Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./FONT-AWSOME/css/all.min.css">
    <link rel="stylesheet" href="./css/carousel.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"> -->
</head>
<body onload="render()">
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark text-white" style="background: #cc0052;">
            <a class="text-white navbar-brand" href="#">
                <i class="fas fa-candy-cane"></i> Candy Store
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto menu">
                    <li class="nav-item active">
                        <a href="./index.html" class="nav-link">Home</a>
                    </li>
                </ul>
                <form action="" class="form-inline mt-2 mt-md-0">
                    <a class="text-white nav-link" href="#">
                        <i class="text-warning fas fa-shopping-cart"></i> Shopping Cart
                        <i style="color:yellow" id="cart_n"></i>
                    </a>
                </form>
            </div>
        </nav>
    </header>

    <div class="container mt-3">
        <main role="main">
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Quality</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">
        </main>
    </div>
    
    <!--END MODAL-->
  
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                  <a href="index.html" class="footer-logo">Candy Shop</a>
                  <p>Achievement is a cotton candy meal that you think will make you full.</p>
                </div>
                <div class="col-md-4">
                    <h4>Location</h4>
                    <p>B89 Surfside Ave.</p>
                    <p>Surfside, CA 90743</p>
                    <p>Unitad States</p>
                    <p>421-454-5100</p>
                    <p>candy.shop@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-decoration-none" href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="far fa-envelope"></i> Email</a>
                        </li>
                        <li><a class="text-decoration-none" href="https://sr-rs.facebook.com/"><i class="fab fa-facebook-f"></i> Facebook</a>
                        </li>
                        <li><a class="text-decoration-none" href="https://twitter.com/"><i class="fab fa-twitter"></i> Twitter</a>
                        </li>
                        <li><a class="text-decoration-none" href="https://www.instagram.com/?hl=sr"><i class="fab fa-instagram"></i> Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-100 text-center credits">
                <p class="float-right">
                    <a class="rounded-circle p-2 text-decoration-none" style="background-color: #cc0052; color: white;" href="#">TOP</a>
                </p>
                <p class="py-5">Made by <a href="">Milica Maksimovic</a> &copy; 2020. All rights resered.</p>
            </div>
        </div>
    </footer>

    </main>



    <!--Java Script-->
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <!-- <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="./js/cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
    <script src="./js/wow.js"></script>
    <!--END Java Script-->
   
</body>
</html>