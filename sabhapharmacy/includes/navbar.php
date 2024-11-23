<?php
    require("./connection/connect.php");
?>
<!-- Navbar -->
<nav class="Main-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Sabha Pharmacy</a>
    </div>
</nav>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">


    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="orders.php">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Orders</a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0 mr-5">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">
                        <i class="fa-solid fa-cart-arrow-down"></i> <span id="cart-item" class="badge badge-danger"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
.Main-nav {
    height: 75px;
    text-align: center;
    justify-content: center;
    align-items: center;
}

.Main-nav a {
    color: #07660a;
    font-size: 45px;
    font-family: 'Kaushan Script', cursive;
}

.navbar-nav .nav-item {
    margin-left: 30px;
}
</style>