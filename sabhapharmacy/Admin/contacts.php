<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabha Pharmacy</title>
    <?php require('includes/head.php') ?>
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0; /* Start hidden */
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden; /* Hide horizontal overflow */
            transition: 0.5s; /* Smooth transition */
            padding-top: 60px; /* Padding for top */
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
            color: #f1f1f1; /* Change color on hover */
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
                font-size: 18px; /* Smaller font size for smaller screens */
            }
        }

        .center {
            width: 80%; /* Width of the container */
            height: 80%; /* Height of the container */
            background: white; /* Background color */
            display: flex; /* Use flexbox for centering */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            position: absolute; /* Allow for absolute positioning */
            top: 50%; /* Position from top */
            left: 50%; /* Position from left */
            transform: translate(-50%, -50%); /* Center the element */
            padding: 20px; /* Optional padding */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow for aesthetics */
            overflow: auto; /* Enable scrolling if content exceeds height */
        }

        table {
            width: 100%; /* Make table full width of the container */
            border-collapse: collapse; /* Collapse borders for a cleaner look */
        }

        td, th {
            border: 1px solid #ccc; /* Add borders to table cells */
            padding: 10px; /* Add some padding for aesthetics */
            text-align: center; /* Center text in cells */
        }
    </style>
</head>
<body>
    <?php require('includes/navbar.php') ?>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="addProduct.php">Add Products</a>
        <a href="client.php">Clients</a>
        <a href="contacts.php">Contact</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <?php
    $conn = new mysqli('localhost', 'root', '', 'ayuruveda');
    $sql = "SELECT * FROM `contactus`;";
    $result = $conn->query($sql);    

    if ($result->num_rows > 0) {
        echo "<div class='center'>";
        // Start the table
        echo "<table>";
        echo "<tr><th>Name</th><th>Phone Number</th><th>Email</th><th>Message</th></tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['Name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Phone_Number']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Message']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
    } else {
        echo "0 results";
    } 
    ?>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px"; // Set width to 250px when opened
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0"; // Set width to 0 to close
        }
    </script>
    <!-- footer-->
</body>
</html>
