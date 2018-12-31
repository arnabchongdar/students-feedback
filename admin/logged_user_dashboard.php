<html>
	<head>
		<title> WELCOME TO YOUR DASHBOARD</title>
		<link rel="stylesheet" href="../css/logged_user_dashboard.css">
	</head>
	<body>
			<!--navigation menu-->
		<div class="menudropdown">
		
		<ul>
			<li class><a href="#">HOME</a></li>		
			
			<li class><a href="#">ABOUT</a>
				<ul>
						<li><a href="#">TEAM</a></li>
						<li><a href="#">BODY</a>
						<ul class="inside2">							
							<li ><a href="#">LINK1</a></li>
							<li><a href="#">LINK2</a></li>
						</ul>							
						</li>
						<li><a href="#">LINK1</a></li>
						<li><a href="#">LINK2</a></li>
						<li><a href="#">LINK3</a></li>

				</ul>
			</li>
			
			<li class><a href="#">REGISTRATION</a>
				<ul>

						<li><a href="../1stsem/1stsemregister.html">1st semester</a></li>
						<li><a href="../2ndsem/2ndsemregister.html">2nd semester</a></li>
						<li><a href="../3rdsem/3rdsemregister.html">3rd semester</a></li>
						<li><a href="../4thsem/4thsemregister.html">4th semester</a></li>
						<li><a href="../5thsem/5thsemregister.html">5th semester</a></li>
						<li><a href="../6thsem/6thsemregister.html">6th semester</a></li>
						<li><a href="../7thsem/7thsemregister.html">7th semester</a></li>
						<li><a href="../8thsem/8thsemregister.html">8th semester</a></li>
				</ul>
			</li>
		
			<li class><a href="#">FEEDBACK RESPONSE</a>
				<ul>					
						<li><a href="#">1st Semester</a></li>
						<li><a href="#">2nd Semester</a></li>
						<li><a href="abc.php">3rd Semester</a></li>
						<li><a href="#">4th Semester</a></li>
						<li><a href="#">5th Semester</a></li>
						<li><a href="#">6th Semester</a></li>
						<li><a href="#">7th Semester</a></li>
						<li><a href="#">8th Semester</a></li>
				</ul>
			</li>
		</ul>		
		
		</div>
		<!--navigation menu ends here-->
		
		<?php
		session_start();
		$hostname = "localhost";
    		$username = "root";
    		$password = "Arnab@1997";
    		$database = "ADMIN";
    
    		$conn = mysqli_connect($hostname, $username, $password, $database);
    		if (!$conn) {
        		die("Connection failed: " . mysqli_connect_error());
    		}
    		$var_course="Admin";
    		

    		
    		
    		$sql="SELECT * FROM admin";
    		$result = mysqli_query($conn,$sql);
			if (!$result) {
   			die(mysqli_error($conn));
    		}
    		else if($result)
    			echo "Connected to database";
    			
			?>
			 		
    		
    		<div class="sidebar">
				<div class="wrapiconandname">				
					<img src="https://cdn1.iconfinder.com/data/icons/rcons-user-action/512/user-512.png">
					<?php
						if(isset($_SESSION['name'])){
							?><p><?php echo $_SESSION['name']."<br>";?></p>
				</div>
				<div class="details">	
					<?php
						echo $var_course."<br>"."<br>";	
						

					}
					else 
						echo"session unset";
					?>
				</div>
			</div>
	</body>
</html>
