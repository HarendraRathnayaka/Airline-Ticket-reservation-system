<html>
    <body>
        <?php
            $passportid = $_POST['passportid'];
            $reservationNo = $_POST['reservationNo'];
            $nic = $_POST['nic'];
            $seatno = $_POST['seatno'];
            $firstname = $_POST['firstname']; 
            $lastname = $_POST['lastname'];
            $payment = $_POST['payment'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $address = $_POST['addres'];
            $day = $_POST['da'];
            $amnt = $_POST['amnt'];
            
            require 'config1.php';

            $query = "INSERT INTO payments (passportid,         reservationNo, nic, seatno, firstname, lastname, payment, mobile, email, addres, da, amnt) VALUES ('$passportid',
            '$reservationNo', '$nic', '$seatno', '$firstname', '$lastname', '$payment', '$mobile', '$email', '$address', '$day', '$amnt')";

            if($connection->query($query))
                echo "Success";
            else
                echo "error".$connection->error;

            $connection->close();
        ?>
    </body>
</html>

