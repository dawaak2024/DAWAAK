<DOCTYPE html>
<html lang="en">

	<head>
		
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-compatible" content="IE-edge"/>
		<meta name ="viewport" content="width=device-width, initial-scale=1.0"/>
		<title> Dawaak </title>
		
		<!--- main template css file--->
		<link rel="stylesheet" href="css/styl.css"/>
		
		<!--- render all element normally --->
		<link rel="stylesheet" href="css/normalize.css"/>
		<!--- font awesome--->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<!--- google fonts--->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
		
	</head>
	
	<body>
		<!---start header--->
	
		<div class="header">
		
			<div class="container">
                <a href="index.php"><img class="logo" src="images/logo.png" alt=""></a>
				<div class="link-center">
                    <a href="#">Home</a>
                    <a href="#">medicine</a>
                    <a href="#">card</a>
                    <a href="#">Order</a>
                </div>
    
                <div class="links">
					<span class="icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
					<ul>
						<li> <a href='pharamAdmin/index.php' class="control">control-panel  <i class="fa-solid fa-screwdriver-wrench"></i></a></li>
						<li> <a href="chat.php" class="chat">chat with doctor  <i class="fa-brands fa-rocketchat"></i></a></li>
						<li> <a href="#bestseller">Best-Seller   <i class="fa-solid fa-window-restore"></i></a></li>
						<li> <a href="#newarrival">New Arrival  </a></li>
                        <li> <a href="#contact">contant  <i class="fa-solid fa-circle-nodes"></i></a></li>
						<li> <a href="logout.php" class="logout">logout  <i class="fa-solid fa-right-from-bracket"></i></a></li>
					</ul>
				</div>
			
			</div>
			
		</div>
		<!---End header--->
        <!---start category--->
        <div class="category">
			<div class="container">
                <h2 class="special-heading">category</h2>
				<div class="field">
					<div class="type">
					<?php
						$result = mysqli_query($conn , "SELECT * FROM medicine WHERE type='stomach' ");
						$row = mysqli_fetch_array($result);
						echo"
						<a href='medicine.php? type=$row[type]'><img src='images/stomach.png' alt='#'></a>";
						?>
						<h2>Stomach and colon</h2>
					</div>
                    <div class="type" >
						<?php
						$result = mysqli_query($conn , "SELECT * FROM medicine WHERE type='common cold' ");
						$row = mysqli_fetch_array($result);
						echo"<a href='medicine.php? type=$row[type]'><img src='images/common cold.png' alt=''></a>";
						?>
						<h2>Common Cold</h2>
					</div>
                    <div class="type" >
						<?php
						$result = mysqli_query($conn , "SELECT * FROM medicine WHERE type='ear' ");
						$row = mysqli_fetch_array($result);
						echo"<a href='medicine.php? type=$row[type]'><img src='images/Eye.png' alt=''></a>";
						?>
						<h2>Ear , Eye</h2>
					</div>
                    <div class="type" >
						<?php
						$result = mysqli_query($conn , "SELECT * FROM medicine WHERE type='painkillers' ");
						$row = mysqli_fetch_array($result);
						echo "<a href='medicine.php? type=$row[type]'><img src='images/painkillers.png' alt=''></a>";
						?>
						<h2>Painkillers</h2>
					</div>
                    <div class="type" >
						<?php
						$result = mysqli_query($conn , "SELECT * FROM medicine WHERE type='Dermatologic' ");
						$row = mysqli_fetch_array($result);
						echo "<a href='medicine.php? type=$row[type]'><img src='images/dermatologic.png' alt=''></a>";
						?>
						<h2>Dermatologic</h2>
					</div>
                    <div class="type" >
						<?php
						$result = mysqli_query($conn , "SELECT * FROM medicine WHERE type='bones' ");
						$row = mysqli_fetch_array($result);
						echo"<a href='medicine.php? type=$row[type]'><img src='images/dones.png' alt=''></a>";
						?>
						<h2>Dones</h2>
					</div>
					<div class="type">
						<?php
						$result = mysqli_query($conn , "SELECT * FROM medicine WHERE type='diabetes' ");
						$row = mysqli_fetch_array($result);
						echo"<a href='medicine.php? type=$row[type]'><img src='images/diabetes.png' alt=''></a>";
						?>
						<h2>Diabetes</h2>
					</div>
					<div class="type">
						<?php
						$result = mysqli_query($conn , "SELECT * FROM medicine WHERE type='teeth' ");
						$row = mysqli_fetch_array($result);
						echo" <a href='medicine.php? type=$row[type]'><img src='images/teeth.png' alt=''></a>";
						?>
						<h2>Teeth</h2>
					</div>
					<div class="type">
						<?php
						$result = mysqli_query($conn , "SELECT * FROM medicine WHERE type='medicine supllie' ");
						$row = mysqli_fetch_array($result);
						echo"<a href='medicine.php? type=$row[type]'><img src='images/1.png' alt=''></a>";
						?>
						<h2>medicine supllie</h2>
					</div>
					<div class="type">
						<?php 
						$result = mysqli_query($conn , "SELECT * FROM medicine WHERE type='vitamins' ");
						$row = mysqli_fetch_assoc($result);
						echo "<a href='medicine.php? type=$row[type]  '><img src='images/2.png' alt='#'></a>";
						?>
						<h2>vitamins</h2>
					</div>
					<div class="type">
						<a href="medicine.php"><img src="images/3.png" alt=""></a>
						<h2>All-Medicine</h2>
					</div>

				</div>
			</div>
		</div>
        <!---End category--->
        <!---start contact--->
        <div class ="contact" id="contact">
            <div class="container">
                <h2 class="special-heading">Contact</h2>
                <p>We are born to create</p>
                <div class="info-contant">
                    <div class="card-contant">
                        <img src="images/logo.png">
                        <div class="social">
                            Find Us On Social Networks
                            <i class="fab fa-youtube"></i>
                            <i class="fa-brands fa-facebook"></i>
							<i class="fab fa-twitter"></i>
                        </div>
                    </div>
                    <div class="card-contant">
                        <h2>Important</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">medicine</a></li>
                            <li><a>Alarm</a></li>
                            <li><a>Order</a></li>
                        </ul>
                    </div>
                    <div class="card-contant">
                        <h2>Help</h2>
                        <ul>
                            <li><a>order information</a></li>
                            <li><a>privacy policy</a></li>
                            <li><a>terms &  Conditions</a></li>
                        </ul>
                    </div>
                    <div class="card-contant">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a>Dawaak@gmail.com</a></li>
                            <li><a>0127 502 4454</a></li>
                            <li><a>Aga-mansoura-Egypt</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!---end contact--->
        <div class="footer">
            @ 2023 <span>Dawaak</span> All Right Reserved 
        </div>
        <!--start footer-->
	</body>