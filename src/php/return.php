<html>
    <body>
        <?php
            $locationDepartureReturn = $_POST['departure_return'];
            $locationArrivalReturn = $_POST['arrival_return']; 
            $dateDepartureReturn= $_POST['depDate_return']; 
            $dateArrivalReturn= $_POST['arrivalDate_return']; 
            $passengerReturn = $_POST['passengerNo_return']; 
           
            require 'config1.php';

            $query = "INSERT INTO returnflights (departure_return,  arrival_return, depDate_return, arrivalDate_return, passengerNo_return)
             VALUES ('$locationDepartureReturn', '$locationArrivalReturn', '$dateDepartureReturn','$dateArrivalReturn' '$passengerReturn')";

            if($connection->query($query))
                echo "Inserted successfully";
            else
                echo "Error ".$connection->error;

            $connection->close();
        ?>
    </body>
</html>