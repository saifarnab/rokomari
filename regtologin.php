
<?php

$user = ($_GET ["user"]);
$email = ($_GET ["email"]);
$pass = ($_GET ["pass"]);

$username = "root";
$password = "";
$server = 'localhost';
$db = 'rokmariDB';

$connect = mysqli_connect( $server, $username, $password, $db )
		or die("Can not connect");

$query = mysqli_query( $connect, "SELECT * FROM user_register" )
		or die("Can not execute query");

if ($query->num_rows > 0) {
    while($row = $query->fetch_assoc()) {
        if($user == $row["user_name"] ){
        	header("Location: /rokmari/wrong.php");
       		exit();  // stop any other processing !important!
        	}	
        }
        $query 	= "INSERT INTO user_register (user_name, email, pass) VALUES ('$user','$email','$pass')" or die("Can not execute query");
		mysqli_query( $connect, $query ) or die("Can not execute query");
        header("Location: /rokmari/userlogin.php");
       	exit();  // stop any other processing !important!
    }
 else {
    echo "0 results";
}
?>