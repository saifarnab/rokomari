<?php 

session_start();
$username = "root";
$password = "";
$server = 'localhost';
$db = 'rokmariDB';

$connect = mysqli_connect( $server, $username, $password, $db )
		or die("Can not connect");
mysqli_set_charset($connect,"utf8");


$login_link = "/rokmari/userlogin.php";
$register_link = "/rokmari/userreg.php";
$category_link = "#";
$cart_link = "/rokmari/cart.php";
$count = 0;
$quantity;
if (isset($_SESSION['name'])) {
	$count = 1;
	$user = $_SESSION['name'];
}

?>


<!DOCTYPE>
<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}


#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<meta content="text/html; charset=utf-8" />
<title>Book Store </title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="container">
	<div id="menu">
    	<ul>
            <li><a href="index.html" class="current">হোম</a></li>
            <li><a href="#">বইয়ের ক্যাটাগরি</a></li>            
            <li><a href="#">নতুন মুক্তিপ্রাপ্ত</a></li>  
            <li><a href="#">প্রকাশনী</a></li> 
            <li><a href="#">যোগাযোগ করুন</a></li>
            <?php
            	
            	if($count == 0){
            		echo "<li><a href=".$login_link.">লগ-ইন</a></li>";
            		echo "<li><a href=".$register_link.">রেজিস্টার</a></li>"; 
            	}else{
            		echo "<li><a>$user</a></li>";
            	}
            ?>
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="header" style="margin-bottom: 20px;">

    </div> <!-- end of header -->
    
    <div id="content" style="margin-bottom: 20px;">
    	<table id="customers">
		  <tr>
		    <th>বইয়ের নাম</th>
		    <th>লেখকের নাম</th>
		    <th>প্রকাশনী</th>
		    <th>দাম</th>
            <th>কোয়ান্টিটি</th>
		    <th>কিনুন</th>
		  </tr>

		  <tr>
		  	<?php
        		$query = mysqli_query( $connect, "SELECT * FROM book_category NATURAL JOIN book" )
						or die("Can not execute query");
        		if ($query->num_rows > 0) {
					while($row = $query->fetch_assoc()) {
						echo "<tr>";
						echo "<td>$row[book_name]</td>";
						echo "<td>$row[author]</td>";
						echo "<td>$row[publication]</td>";
                        echo "<td>$row[price]</td>";
                        $book_id = $row["book_id"];

                        echo "<form action='categorytocart.php?book_id=$book_id' method='POST'>";
                        echo "<td><input type='number' name='quantity'></td>";
                        echo "<td><input type='submit' value='ক্রয় করুণ'></td>";
                        echo "</form>";
						echo "</tr>";
					}
				}
					else {
					echo "0 results";
				}
        	?>
		  </tr>

</table>
    </div>
    
    <div id="footer">
    
	       
        কপি-রাইট © ২০১৮ <a href="#"><strong>rokmari.com</strong></a> 
        </div> 
    <!-- end of footer -->
</div> <!-- end of container -->
</body>
</html>