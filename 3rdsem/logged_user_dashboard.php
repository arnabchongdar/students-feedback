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
			
			<li class><a href="#">THINGS</a>
				<ul>

						<li><a href="#">things1</a></li>
						<li><a href="#">things2</a></li>
						<li><a href="#">things3</a></li>
						<li><a href="#">LINK2</a></li>
						<li><a href="#">LINK3</a></li>
				</ul>
			</li>
		
			<li class><a href="#">CONTACT</a>
				<ul>					
						<li><a href="#">things1</a></li>
						<li><a href="#">things2</a></li>
						<li><a href="#">things3</a></li>
						<li><a href="#">LINK2</a></li>
						<li><a href="#">LINK3</a></li>
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
    		$database = "3TH";
    
    		$conn = mysqli_connect($hostname, $username, $password, $database);
    		if (!$conn) {
        		die("Connection failed: " . mysqli_connect_error());
    		}
    		$var_course="B.TECH";
    		$var_specialization="E.C.E";
    		$var_year="2nd year";
		$var_semester="3th semester";

    		
    		
    		$sql="SELECT * FROM 3log";
    		$result = mysqli_query($conn,$sql);
			if (!$result) {
   			die(mysqli_error($conn));
    		}
    		else if($result)
    			echo "Connected to database";
    			
			?><!--mid-portion--->
			<div class="list">
			<?php			
			while ($row=mysqli_fetch_array($result)) $flag=1;{
				if($flag==1){
				echo "YOUR 3RD SEMESTER COURSE CONTAINS<br><br>";
				echo "M302: "."MATHEMATICS"."<br>M(CS)301 : "."NUMERICAL METHODS"."<br>EC301: "."CIRCUIT THEORY &NETWORKS"."<br>EC302 : "."SOLID STATE DEVICE"."<br>EC303 :"."SIGNAL &SYSTEM"."<br>EC304 :"."ANALOG ELECTRONICS"."<br>M(CS)391:"."NUMERICAL METHODS LAB"."<br>EC391:"."CIRCUIT THEORY LAB"."<br>EC392:"."SOLID STATE DEVICE LAB"."<br>EC393:"."SIGNAL & SYSTEM LAB"."<br>EC394:"."ANALOG ELECTRONICS LAB"."<br><br><a href=M302_1feedback.html>CLICK HERE TO SUBMIT YOUR FEEDBACK</a>"; 
 $flag++; 
        	} }
        	?>
        	</div>  <!---mid-portion-->

			 		
    		
    		<div class="sidebar">
				<div class="wrapiconandname">				
					<img src="https://cdn1.iconfinder.com/data/icons/rcons-user-action/512/user-512.png">
					<?php
						if(isset($_SESSION['name'])){
							?><p><?php echo $_SESSION['name']."<br>";?></p>
				</div>
				<div class="details">	
					<?php
						echo "COURSE:".$var_course."<br>"."<br>";	
						echo "SPECIALIZATION:"."&nbsp".$var_specialization."<br>"."<br>";
						echo "YEAR:".$var_year."<br>"."<br>";	
						echo "SEMESTER:".$var_semester."<br>"."<br>";	
					}
					else 
						echo"session unset";
					?>
				</div>
			</div>
	</body>
</html>
