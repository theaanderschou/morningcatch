    <?php
    
    if(isset($_POST['customer_firstname']) && isset($_POST['customer_email']) && isset($_POST['customer_password'])){


    include_once "dbh.inc.php";

        $customer_firstname = $_POST['customer_firstname'];
        $customer_email = $_POST['customer_email'];
        $customer_password = $_POST['customer_password'];


        // First we make a SQL query that selects all data from our users table in the database.
        $sql = "INSERT INTO customer (customer_firstname, customer_email, customer_password) VALUES ('$customer_firstname', '$customer_email', '$customer_password');";
        
        if($conn->query($sql) === TRUE) {
            echo "You created an account!";
        } else {
            echo "Error:" .$sql . "<br>" .$conn->error;
        }
        $conn->close();

        // Then we run the query in the database.
        mysqli_query($conn, $sql);
    
    } else {
        echo "Please fill out all fields in the form.";
    }

    ?> 
