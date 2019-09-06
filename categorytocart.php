<?php 

session_start();
$username = "root";
$password = "";
$server = 'localhost';
$db = 'rokmariDB';

$connect = mysqli_connect( $server, $username, $password, $db )
		or die("Can not connect");
mysqli_set_charset($connect,"utf8");

if (isset($_SESSION['name'])) {
	$book_id = ($_GET ["book_id"]);
	$quantity = ($_POST ["quantity"]);
	echo "$quantity";
	$user_id = $_SESSION['user_id'];
	$sql = "INSERT INTO cart (user_id, quantity, book_id)
		VALUES ('$user_id', '$quantity', '$book_id')";

	if ($connect->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $connect->error;
	}
	header("Location: /rokmari/cart.php");
       		exit();
}else{
	header("Location: /rokmari/index.php");
       		exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>EROR 404</title>
  <meta charset="utf-8">
</head>
<body>

<div>
  <p style="color:red">Something went wrong.</p><br>
  <a href="/rokmari/userreg.php" type="button">Go Back</a> 
</div>

</body>
</html>
