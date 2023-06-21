<html>
    <body>
        <?php
            $fname = $_POST['fname'];
            $lname = $_POST['lname']; 
            $mname = $_POST['mname']; 
            $email = $_POST['email'];
            $telno = $_POST['telno']; 
            $dob = $_POST['dob']; 
            $gender = $_POST['gen']; 
            $address = $_POST['address']; 
            $school = $_POST['school']; 
            $uni = $_POST['uni']; 
            $edu = $_POST['education']; 
            $degree = $_POST['degree'];
            $position = $_POST['position']; 
            $branch = $_POST['branch']; 

            require 'config2.php';
            
            $query = "INSERT INTO details (fname, lname, mname, email,	telno, dob, gender,	addres, school, uni,edu, degree, position, branch) VALUES ('$fname', '$lname', '$mname', '$email', '$telno', '$dob', '$gender', '$address', '$school', '$uni', '$edu', '$degree', '$position', '$branch')";

            if($connection->query($query))
                echo "Inserted successfully";
            else
                echo "Error ".$connection->error;

            $connection->close();
        ?>
    </body>
</html>