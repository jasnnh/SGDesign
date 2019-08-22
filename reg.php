<style>
body{
overflow-x:hidden;
background-color:#000;
}
</style>
<?php
require("config.php");

$ip = getIP();

$user = $_POST['username'];
$pass = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$referral = $_POST['referral'];
//echo "<script>alert($referral);</script>";
$referral = str_replace("(Referral)", "", $referral);
//echo "<script>alert($referral);</script>";

$user = antiSQL($user);
$pass = antiSQL($pass);
$name = antiSQL($name);
$email = antiSQL($email);
$referral = antiSQL($referral);

//check if our referral exists
if(empty($referral)){
}else{
$sql="SELECT * FROM `accounts` WHERE `Username`='$referral'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
}else{
    echo "<script>var r = confirm('referral name does not exist!');";
	echo "if(r == true){";
	echo "window.location.href = 'register.php';";
	echo "}else{";
    echo "window.location.href = 'index.php';";
	echo "};";
	echo "</script>";
	die();
}
}

//Check if fields are empty if they are kill the registration process
	if(empty($user)){
	echo "<script>alert('Username field empty!');window.location = 'register.php';</script>";
	die();
	}
	elseif(empty($pass)){
	echo "<script>alert('Password field empty!');window.location = 'register.php';</script>";
	die();
	}
	elseif(empty($name)){
	echo "<script>alert('Name field empty!');window.location = 'register.php';</script>";
	die();
	}
	elseif(empty($email)){
	echo "<script>alert('Email field empty!');window.location = 'register.php';</script>";
	die();
	}else{
		
//check if username exists
$sql="SELECT * FROM `accounts` WHERE `Username`='$user'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<script>var r = confirm('username taken!');";
	echo "if(r == true){";
	echo "window.location.href = 'register.php';";
	echo "}else{";
    echo "window.location.href = 'index.php';";
	echo "};";
	echo "</script>";
	
	} else {
		$sql = "INSERT INTO accounts (Username, Password, Y, R, ip, name, email) VALUES ('$user', '$pass', '$start_gold', '$start_gem', '$ip', '$name', '$email')";

	if ($conn->query($sql) === TRUE) {
		//get our id
		$sql2 ="SELECT * FROM `accounts` WHERE `Username`='$user'";
		$result = $conn->query($sql2);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$acctid = $row["ID"];
				}
			}
			
		//get our referred id
		$sql2 ="SELECT * FROM `accounts` WHERE `Username`='$referral'";
		$result = $conn->query($sql2);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$referralID = $row["ID"];
				}
			}
		$sql2 = "INSERT INTO referral (AccountID, Name, ReferralID) VALUES ('$acctid', '$user', '$referralID')";
		$conn->query($sql2);
		
		echo "<script>var r = confirm('registration successful!');";
		echo "if(r == true){";
		echo "window.location.href = 'index.php';";
		echo "}else{";
		echo "window.location.href = 'index.php';";
		echo "};";
		echo "</script>";
	} else {
		echo "Error could not register!: " . $sql . "<br>" . $conn->error;
		die();
}
}

} //end the else after empty field check

$conn->close();
?>