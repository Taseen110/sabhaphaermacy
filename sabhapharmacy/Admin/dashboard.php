<?php
    require("../connection/connect.php");
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Common Tags -->
    <?php require('includes/head.php') ?>
    <style>
    body {
        font-family: "Lato", sans-serif;
    }

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
    </style>
</head>

<body>
    <!-- Navbar and Header -->
    <?php require('includes/navbar.php') ?>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="addProduct.php">Add Products</a>
        <a href="Client.php">Clients</a>
        <a href="contacts.php">Contact</a>
    </div>


    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <section style="height: 100vh;">
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-sm-3">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h3 class="card-title text-white">Products</h3>
                            <?php
                               $sql = "SELECT * from product";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount1 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo '<h1 class="text-white mb-3 ms-2">>> '.$rowcount1.'</h1>';
                                }
                            ?>
                            <a href="addProduct.php" class="btn btn-dark mb-3">Add Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h3 class="card-title text-white">Pending Orders</h3>
                            <?php
                               $sql = "SELECT * from orders";

                               if ($result = mysqli_query($con, $sql)) {
                               
                                   // Return the number of rows in result set
                                   $rowcount2 = mysqli_num_rows( $result );
                                   
                                   // Display result
                                   echo '<h1 class="text-white mb-3 ms-2">>> '.$rowcount2.'</h1>';
                                }
                            ?>
                            <a href="viewOrders.php" class="btn btn-dark mb-3">View Orders</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>
    <!-- footer-->
    <?php require('includes/footer.php') ?>
</body>

</html>