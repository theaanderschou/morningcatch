    <?php
    
    include_once "dbh.inc.php";

        $customer_firstname = $_POST['customer_firstname'];
        $customer_email = $_POST['customer_email'];
        $customer_password = $_POST['customer_password'];


        // First we make a SQL query that selects all data from our users table in the database.
        $sql = "INSERT INTO customer (customer_firstname, customer_email, customer_password) VALUES ('$customer_firstname', '$customer_email', '$customer_password');";
        
        if($conn->query($sql) === TRUE) {
    ?>
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

    <div class="signup-tabs signup-tab">
        <p class="signup-p">Sign up</h1>
    </div>

    <div class="signup-tabs login-tab">
        <p class="signup-p">Login</h1>
    </div>

    <div class="signup-content">

        <div class="signup-title">
            <h2>Sign up</h2>
        </div>

            <div class="signup-alert" role="alert">
                <h2>Well done!</h2>
                <p>You have created a Morningcatch account!</p>
            </div>
                <a href="index.html">
                    <button type="submit" name="submit" class="signup-btn">Cool!</button>
                </a>
            </div>
        </form>

    </div>

    <div class="signup-image">
        <img src="img/morningcatch-logo-neg.png" alt="">
    </div>

</div>
</div>

    <?php
        } else {
            echo "Error:" .$sql . "<br>" .$conn->error;
        }
        $conn->close();

        // Then we run the query in the database.
        mysqli_query($conn, $sql);

    ?> 


