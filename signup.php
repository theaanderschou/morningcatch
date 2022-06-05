    <?php
    
    include_once "dbh.inc.php";

        $customer_firstname = $_POST['customer_firstname'];
        $customer_email = $_POST['customer_email'];
        $customer_password = $_POST['customer_password'];


        // First we make a SQL query that selects all data from our users table in the database.
        $sql = "INSERT INTO customer (customer_firstname, customer_email, customer_password) VALUES ('$customer_firstname', '$customer_email', '$customer_password');";
        
        if($conn->query($sql) === TRUE) {
    ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Morningcatch</title>

    <!-- SEO meta tags-->
    <meta name="description" content="">

    <meta name="keywords" content="">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

</head>

<body>


    <nav id="signup-nav">

        <a href="index.html">
            <div class="signup-logo">
                <img src="./img/morningcatch-logo-neg.png" alt="Morningcatch Logo">
            </div>
        </a>

        <ul class="signup-navlinks">
            <li>
                <a href="https://morningcatch.dk#anchor1">Benefits</a>
            </li>
            <li>
                <a href="https://morningcatch.dk#anchor3">Functionality</a>
            </li>
            <li>
                <a href="#">Sign up</a>
            </li>
            <li>
                <a href="#">Login</a>
            </li>
            <li>
                <a href="#">EN</a>
            </li>
        </ul>

    </nav>

<div class="signup-row">

<div class="signup-card">

    <div class="signup-content">

            <div class="signup-alert" role="alert">
                <h3>Well done!</h3>
                <br><br>
                <h1>You have created a Morningcatch account!</h1>
            </div>
                <a href="index.html">
                    <button type="submit" name="submit" class="signup-btn2">Cool!</button>
                </a>
    </div>

    <div class="signup-image">
        <img src="img/morningcatch-logo-neg.png" alt="">
    </div>

</div>
</div>

<script src="js/main.js"></script>

</body>

</html>

    <?php
        } else {
            echo "Error:" .$sql . "<br>" .$conn->error;
        }
        $conn->close();

        // Then we run the query in the database.
        mysqli_query($conn, $sql);

    ?> 


