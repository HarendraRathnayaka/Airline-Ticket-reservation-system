<html>
    <body>
        <?php
            $fname = $_POST['fname'];
            $lname = $_POST['lname']; 
            $mname = $_POST['mname']; 
            $username = $_POST['email']; 
            $telno = $_POST['telno']; 
            $dob = $_POST['country']; 
            $country = $_POST['dob'];
            $gender = $_POST['gen'];
            $address = $_POST['address']; 
            $pass = $_POST['password']; 

            require 'config1.php';

            $query = "SELECT * FROM user WHERE email = '$username'";

            if($result = $connection->query($query)){
                if($row = mysqli_fetch_array($result))
                    echo "user name already exist";
                else{
                     $query = "INSERT INTO user (fname, lname, mname, email,	telno, dob, country, gender,	addres, pass) VALUES ('$fname', '$lname', '$mname', '$username', '$telno', '$dob', '$country', '$gender', '$address', '$pass')";
        
                    if($connection->query($query))
                        echo "Inserted successfully";
                    else
                        echo "Error".$connection->error;
                    }
            }
            

            $connection->close();

            /*echo $fname, "<br>", $lname, "<br>",$mname, "<br>", $username, "<br>",$telno, "<br>",$dob, "<br>",$country, "<br>",$gender, "<br>",$address, "<br>",$pass, "<br>";*/
        ?>
    </body>
</html>