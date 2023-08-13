<?php
    //form validation
	$FullNameErr = $PhoneNumber  = $email = $Subject  = NULL;
	$FullName = $PhoneNumber  = $email = $Subject = NULL;

	$flag = true;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["FullName"])) {
			$FulNameErr = "FullName is required";
			$flag = false;
		} else {
			$FullName = test_input($_POST["FullName"]);
		}

		if (empty($_POST["PhoneNumber"])) {
			$PhoneNumber = "PhoneNumber is required";
			$flag = false;
		} else {
			$PhoneNumber = test_input($_POST["PhoneNumber"]);
		}

		if (empty($_POST["email"])) {
			$email = "Email is required";
			$flag = false;
		} else {
			$email = test_input($_POST["email"]);
		}

		if (empty($_POST["Subject"])) {
			$Subject = "Subject is required";
			$flag = false;
		} else {
			$Subject = test_input($_POST["Subject"]);
		}

		if (empty($_POST["Message"])) {
			$Message = "Message is required";
			$flag = false;
		} else {
			$Message = test_input($_POST["Message"]);
		}


	}
	
	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	


 //Create connection
 if ($flag){
$conn =mysqli_connect ("localhost",
	"root","", "test");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
 //echo "connect successfully";

$sqlquery = "INSERT INTO users (FullName,email,PhoneNumber,Subject,Message) VALUES
	('$FullName', '$email', '$PhoneNumber','$Subject','$Message')";


if(mysqli_query($conn, $sqlquery)){
	echo "<h3>data stored in a database successfully.";

}
 else{
	echo "ERROR: Hush! Sorry $sqlquery. "
		. mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);



$FullName = $_POST['FullName'];
$PhoneNumber = $_POST['PhoneNumber'];
$email = $_POST['email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

//email contact
$to = "test@techsolvitservice.com";
$subject = "Mail From website";
$txt ="FullName = ". $FullName ."\r\n PhoneNumber =" . $PhoneNumber. "\r\n  email = " . $email . "\r\n Message =" . $Message;
$headers = "From:guptarajeshwarionejan@gmail.com" . "\r\n" .
"CC: babyindia@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");

 }
?>
	

	