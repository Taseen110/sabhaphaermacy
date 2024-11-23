<?php
    require("../connection/connect.php");
    if(isset($_POST['submit'])){
        $product_name=$_POST['product_name'];
        $product_price=$_POST['product_price'];
        $product_image=$_POST['product_image'];
        $product_code=$_POST['product_code'];


        $sql="insert into `product` (product_name,product_price,product_image,product_code) values('$product_name','$product_price','$product_image','$product_code')";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:dashboard.php');
        }
        else{
            die(mysqli_error($con));
        }
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


    <section class="" style="height: 100vh;">
        <div class="container">
            <form action="" method="post">
                <div class="row justify-content-center">
                    <div class="col-md-6 mt-5">
                        <h4 class="bg-light p-2 shadow-sm">Add Products</h4>
                        <div class="border border-success p-4 bg-secondary text-white shadow-lg">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    name="product_name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    name="product_price">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product image</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    value="assets/products/" name="product_image">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Code</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    name="product_code">
                            </div>
                            <button class="btn btn-success btn-block" type="submit" name="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="container-fluid">
        <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Code</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql="select * from `product`";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $product_name=$row['product_name'];
                            $product_price=$row['product_price'];
                            $product_image=$row['product_image'];
                            $product_code=$row['product_code'];
                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$product_name.'</td>
                                <td>Rs. '.$product_price.'.00</td>
                                <td>'.$product_image.'</td>
                                <td>'.$product_code.'</td>
                                <td>
                                    <button class="btn btn-success" name="update"><a class="text-light" style="text-decoration: none;" href="./update/cusUpdate.php?updateid='.$id.'"><i class="fa-solid fa-cart-flatbed"></i></a></button>
                                </td>
                            </tr>';
                        }
                    }
                ?>

                </tbody>
            </table>
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