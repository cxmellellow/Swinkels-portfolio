<<<<<<< HEAD
     <?php
        $servername = "localhost"; //local host works sinces its on the current server.
        $username = "";//enter in username that has access to database
        $password = "";//enter usernames password
        $dbname = "swinkies_porfolio";
=======
    <?php
        $servername = "localhost"; //local host works sinces its on the current server.
        $username = "";//enter in username that has access to database
        $password = "";//enter usernames password
        $dbname = ""; //enter name of databse on server
>>>>>>> 9f7ddc2083355b26aaf96d5e13ed38febcfd4f21

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        else {
            echo "Connection Successful";
        }


        "INSERT INTO contact_table (Client, Email, Reason, Comment)
        VALUES ('".$POST["name"]."','". $POST['email']."','".$POST["reason"]."','".$POST["message"]."')";


        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 9f7ddc2083355b26aaf96d5e13ed38febcfd4f21
