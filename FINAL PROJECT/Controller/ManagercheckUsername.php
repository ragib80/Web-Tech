<?php
$connect=mysqli_connect("localhost","root","","user");
if (isset($_POST["username"])) {
	$username=mysqli_real_escape_string($connect, $_POST["username"]);
	$query="SELECT * FROM users WHERE username='".$username."'";
	$result=mysqli_query($connect,$query);
	echo mysqli_num_rows($result);
}
else{
	echo "data not found";
}

?>