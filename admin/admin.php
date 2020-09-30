<?php
include_once '../db/connection.php';
$object= new Connection();
$connection= $object->Connect();

$query = "SELECT id,product_order,total FROM product_order";
$result = $connection->prepare($query);
$result->execute();
$data=$result->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./FONT-AWSOME/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animate.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"> -->
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark text-white" style="background: #cc0052;">
            <a class="text-white navbar-brand" href="#">
                <i class="fas fa-heartbeat"></i> Candy Store
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto menu">
                    <li class="nav-item active">
                        <a href="../index.html" class="nav-link">Home</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <a style="cursor:pointer" class="nav-link text-white" href="../index.html">
                EXIT
                </a>
                </form>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button data-toggle="modal" id="newBtn" type="button" class="mt-4 btn btn-outline-dark">
                    New Order
                </button>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tableOrders" class="table table-striped table-bordered table-condensed" style="width:100%;" >
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Order</th>
                                <th>Total</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($data as $dat){
                            ?>
                            <tr>
                                <td><?php echo $dat['id']?></td>
                                <td><?php echo $dat['product_order']?></td>
                                <td><?php echo $dat['total']?></td>
                                <td></td>
                            </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formOrders">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="order" class="col-form-label">Order:</label>
                            <input type="text" class="form-control" id="order">
                        </div>
                        <div class="form-group">
                            <label for="total" class="col-form-label">Total:</label>
                            <input type="text" class="form-control" id="total">
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <button type="submit" id="btnSaveOrder" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

    <div class="container py-5">
        <footer>
            <p class="float-right">
                <a class="rounded-circle p-2 text-decoration-none" style="background-color: #cc0052; color: white;" href="#">TOP</a>
            </p>
            <div class="row">
                 CANDY
            </div>
        </footer>
    </div>  

    



    <!--Java Script-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
    <script src="../js/wow.js"></script>
    <script src="./js/cart.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="./admin.js"></script>
    <!--END Java Script-->  
</body>
</html>