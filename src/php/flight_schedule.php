<html>
    <body>
        <?php
            $locationDepartureOneway = $_POST['departure_oneway'];
            $locationArrivalOneway = $_POST['arrival_oneway']; 
            $dateDepartureOneway= $_POST['depDate_oneway']; 
            $passengerOneway = $_POST['passengerNo_oneway']; 
           
            require 'config1.php';

            $query = "INSERT INTO onewayflights (departure_oneway,  arrival_oneway, depDate_oneway,passengerNo_oneway)
             VALUES ('$locationDepartureOneway', '$locationArrivalOneway', '$dateDepartureOneway', '$passengerOneway')";

            if($connection->query($query))
                echo "Inserted successfully";
            else
                echo "Error ".$connection->error;

            $connection->close();
        ?>
    </body>
</html>