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
$category_link = "/rokmari/islami.php";
$count = 0;
if (isset($_SESSION['name'])) {
	$count = 1;
	$user = $_SESSION['name'];
}

?>


<!DOCTYPE>
<html>
<head>
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
    
    <div id="header">

    </div> <!-- end of header -->
    
    <div id="content">
    	
        <div id="content_left">
        	<div class="content_left_section">
            	<h1>ক্যাটাগরি</h1>
                <ul>

                	<?php
                		$query = mysqli_query( $connect, "SELECT * FROM book_category" )
								or die("Can not execute query");
                		if ($query->num_rows > 0) {
    						while($row = $query->fetch_assoc()) {
    							$val = $row["category_name"];
        						echo "<li><a href=".$category_link.">$val</a></li>";
        					}
    					}
 						else {
    						echo "0 results";
						}
                	?>
            	</ul>
            </div>
			<div class="content_left_section">
            	<h1>সর্বোচ্চ বিক্রিত বই</h1>
                <ul>
                    <li><a href="#">দ্য অ্যালকেমিস্ট</a></li>
                    <li><a href="#">সুলতান কাহিনি</a></li>
                    <li><a href="#">দ্যা রিভার্টসঃ ফিরে আসার গল্প</a></li>
                    <li><a href="#">বীরাঙ্গনা সমগ্র</a></li>
                    <li><a href="#">বিশ্বাসের যৌক্তিকতা</a></li>
                    <li><a href="#">নিউট্রিশন প্রোগ্রামিং</a></li>
                    <li><a href="#">বৈজ্ঞানিক কল্পকাহিনী ত্রাতিনা</a></li>
                    <li><a href="#">কম্পিউটার প্রোগ্রামিং</a></li>
                    <li><a href="#">রিচার্জ ইয়োর ডাউন ব্যাটারি</a></li>
            	</ul>
            </div>
            
            <div class="content_left_section">                
                
			</div>
        </div> <!-- end of content left -->
        
        <div id="content_right">
        	<div class="product_box">
            	<h1>ফটোগ্রাফির বই</h1>
   	      <img src="images/templatemo_image_01.jpg" alt="image" />
                <div class="product_info">
                	<p>ফটোগ্রাফি নিয়ে কম বেশী সবারই আগ্রহ আছে। সিজানুর রহমানের বইটি পাওয়া যাচ্ছে আমাদের কাছে।</p>
                  <h3>১৫০ টাকা</h3>
                    <div class="buy_now_button"><a href="">কিনুন</a></div>
                    <div class="detail_button"><a href="">বিস্তারিত</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="product_box">
            	<h1>রন্ধন বই</h1>
       	    <img src="images/templatemo_image_02.jpg" alt="image" />
                <div class="product_info">
                	<p>বাংলাদেশের অন্যতম জনপ্রিয় রন্ধনশিল্পী কেকা ফেরদৌসী। তার "রান্না" বইটি পাওয়া যাচ্ছে আমাদের কাছে।</p>
                    <h3>২২৫ টাকা</h3>
                    <div class="buy_now_button"><a href="">কিনুন</a></div>
                    <div class="detail_button"><a href="">বিস্তারিত</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="product_box">
            	<h1>ইসলামী বই</span></h1>
   	      <img src="images/templatemo_image_03.jpg" alt="image" />
                <div class="product_info">
                	<p>সহিহ বুখারী শরীফ কিনুন আমাদের কাছে।</p>
                    <h3>৬২০ টাকা</h3>
                    <div class="buy_now_button"><a href="">কিনুন</a></div>
                    <div class="detail_button"><a href="">বিস্তারিত</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="product_box">
            	<h1>সায়েন্স-ফিকশন</span></h1>
            	<img src="images/templatemo_image_04.jpg" alt="image" />
                <div class="product_info">
                	<p>মুহম্মদজাফর ইকবাল একজন বাংলাদেশী। তার "বৈজ্ঞানিক কল্পকাহিনী ত্রাতিনা" পাওয়া যাচ্ছে আমাদের কাছে।</p>
                    <h3>৩০০ টাকা</h3>
                    <div class="buy_now_button"><a href="">কিনুন</a></div>
                    <div class="detail_button"><a href="">বিস্তারিত</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="footer">
    
	       
        কপি-রাইট © ২০১৮ <a href="#"><strong>rokmari.com</strong></a> 
        </div> 
    <!-- end of footer -->
</div> <!-- end of container -->
</body>
</html>