<html>
    <body>
        <?php
            $feedback = $_POST['txtFeedback'];

       
            require 'config1.php';

            $query = "INSERT INTO feedback (txtFeedback)
             VALUES ('$feedback')";

            if($connection->query($query))
                echo "Inserted successfully";
            else
                echo "Error ".$connection->error;

            $connection->close();
        ?>
    </body>
</html>