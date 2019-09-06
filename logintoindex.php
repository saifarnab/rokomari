<?php 

session_start();

$username = "root";
$password = "";
$server = 'localhost';
$db = 'rokmariDB';

$user = ($_GET ["user"]);
$pass = ($_GET ["pass"]);
$user_id;
$connect = mysqli_connect( $server, $username, $password, $db )
		or die("Can not connect");

$query = mysqli_query( $connect, "SELECT * FROM user_register" )
		or die("Can not execute query");

if ($query->num_rows > 0) {
    while($row = $query->fetch_assoc()) {
        if($user == $row["user_name"] && $pass = $row["pass"]){
        	$_SESSION['name'] = $user;
        	$_SESSION['pass'] = $pass;
            $_SESSION['user_id'] = $row[id];
        	header("Location: /rokmari/index.php");
       		exit();  // stop any other processing !important!
        	}	
        }
        header("Location: /rokmari/wrong.php");
       	exit();  // stop any other processing !important!  
    }
 else {
    echo "0 results";
}

?>


