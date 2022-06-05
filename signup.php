    <?php
    
    include_once "dbh.inc.php";

        $customer_firstname = $_POST['customer_firstname'];
        $customer_email = $_POST['customer_email'];
        $customer_password = $_POST['customer_password'];


        // First we make a SQL query that selects all data from our users table in the database.
        $sql = "INSERT INTO customer (customer_firstname, customer_email, customer_password) VALUES ('$customer_firstname', '$customer_email', '$customer_password');";
        
        if($conn->query($sql) === TRUE) {
    ?>
            <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </div>
    <?php
        } else {
            echo "Error:" .$sql . "<br>" .$conn->error;
        }
        $conn->close();

        // Then we run the query in the database.
        mysqli_query($conn, $sql);

    ?> 


