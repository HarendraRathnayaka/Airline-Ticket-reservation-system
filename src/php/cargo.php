<html>
<body>
<?php
	$senFirstName = $_POST['senFirstName'];
	$senLastName = $_POST['senLastName'];
	$senAddress = $_POST['senAddress'];
	$senEmail = $_POST['senEmail'];
	$senPhone = $_POST['senPhone'];
	$recFirstName = $_POST['recFirstName'];
	$recLastName = $_POST['recLastName'];
	$recAddress = $_POST['recAddress'];
	$recEmail = $_POST['recEmail'];
	$recPhone = $_POST['recPhone'];
	$postMethod = $_POST['postMethod'];
	
	require 'config1.php';

	//Database

	$query = "INSERT INTO cargo (senFirstName, senLastName, senAddress, senEmail, senPhone, recFirstName, recLastName, recAddress, recEmail, recPhone, postMethod) VALUES ('$senFirstName', '$senLastName', '$senAddress', '$senEmail', '$senPhone', '$recFirstName', '$recLastName', '$recAddress', '$recEmail', '$recPhone','$postMethod')";

	if($connection->query($query))
		echo "Inserted successfully";
	else
		echo "Error ".$connection->error;

	$connection->close();
?>
</body>
</html>