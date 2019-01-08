<html>
	<head>
		<title>CONTINUE TO DASHBOARD</title>
		<link rel="stylesheet" href="../css/login_submit_for_project.css">
		
			
	
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
		
		<!--php code starts here-->
		<?php
			session_start();
			
    		$hostname = "localhost";
    		$username = "root";
    		$password = "Arnab@1997";
    		$database = "5TH";
    
    		$conn = mysqli_connect($hostname, $username, $password, $database);
    		if (!$conn) {
        		die("Connection failed: " . mysqli_connect_error());
    		}
    
    
   		$sql1_1= "SELECT AVG(grade1) FROM HU501";//first database start
		$sql1_2= "SELECT AVG(grade2) FROM HU501";
		$sql1_3= "SELECT AVG(grade3) FROM HU501";
		$sql1_4= "SELECT AVG(grade4) FROM HU501";
		$sql1_5= "SELECT AVG(grade5) FROM HU501";
		$sql1_6= "SELECT AVG(grade6) FROM HU501";
		$sql1_7= "SELECT AVG(grade7) FROM HU501";
		$sql1_8= "SELECT AVG(grade8) FROM HU501";
    		$result1_1 = mysqli_query($conn,$sql1_1);
		$result1_2 = mysqli_query($conn,$sql1_2);
		$result1_3 = mysqli_query($conn,$sql1_3);
		$result1_4 = mysqli_query($conn,$sql1_4);
		$result1_5 = mysqli_query($conn,$sql1_5);
		$result1_6 = mysqli_query($conn,$sql1_6);
		$result1_7 = mysqli_query($conn,$sql1_7);
		$result1_8 = mysqli_query($conn,$sql1_8);//first database ends
		
		$sql2_1= "SELECT AVG(grade1) FROM EC501";//second database starts
		$sql2_2= "SELECT AVG(grade2) FROM EC501";
		$sql2_3= "SELECT AVG(grade3) FROM EC501";
		$sql2_4= "SELECT AVG(grade4) FROM EC501";
		$sql2_5= "SELECT AVG(grade5) FROM EC501";
		$sql2_6= "SELECT AVG(grade6) FROM EC501";
		$sql2_7= "SELECT AVG(grade7) FROM EC501";
		$sql2_8= "SELECT AVG(grade8) FROM EC501";
    		$result2_1 = mysqli_query($conn,$sql2_1);
		$result2_2 = mysqli_query($conn,$sql2_2);
		$result2_3 = mysqli_query($conn,$sql2_3);
		$result2_4 = mysqli_query($conn,$sql2_4);
		$result2_5 = mysqli_query($conn,$sql2_5);
		$result2_6 = mysqli_query($conn,$sql2_6);
		$result2_7 = mysqli_query($conn,$sql2_7);
		$result2_8 = mysqli_query($conn,$sql2_8);//second database ends

		$sql3_1= "SELECT AVG(grade1) FROM EC502";//THIRD database starts
		$sql3_2= "SELECT AVG(grade2) FROM EC502";
		$sql3_3= "SELECT AVG(grade3) FROM EC502";
		$sql3_4= "SELECT AVG(grade4) FROM EC502";
		$sql3_5= "SELECT AVG(grade5) FROM EC502";
		$sql3_6= "SELECT AVG(grade6) FROM EC502";
		$sql3_7= "SELECT AVG(grade7) FROM EC502";
		$sql3_8= "SELECT AVG(grade8) FROM EC502";
    		$result3_1 = mysqli_query($conn,$sql3_1);
		$result3_2 = mysqli_query($conn,$sql3_2);
		$result3_3 = mysqli_query($conn,$sql3_3);
		$result3_4 = mysqli_query($conn,$sql3_4);
		$result3_5 = mysqli_query($conn,$sql3_5);
		$result3_6 = mysqli_query($conn,$sql3_6);
		$result3_7 = mysqli_query($conn,$sql3_7);
		$result3_8 = mysqli_query($conn,$sql3_8);//THIRD database ends
		
		$sql4_1= "SELECT AVG(grade1) FROM EC503";//FOURTH database starts
		$sql4_2= "SELECT AVG(grade2) FROM EC503";
		$sql4_3= "SELECT AVG(grade3) FROM EC503";
		$sql4_4= "SELECT AVG(grade4) FROM EC503";
		$sql4_5= "SELECT AVG(grade5) FROM EC503";
		$sql4_6= "SELECT AVG(grade6) FROM EC503";
		$sql4_7= "SELECT AVG(grade7) FROM EC503";
		$sql4_8= "SELECT AVG(grade8) FROM EC503";
    		$result4_1 = mysqli_query($conn,$sql4_1);
		$result4_2 = mysqli_query($conn,$sql4_2);
		$result4_3 = mysqli_query($conn,$sql4_3);
		$result4_4 = mysqli_query($conn,$sql4_4);
		$result4_5 = mysqli_query($conn,$sql4_5);
		$result4_6 = mysqli_query($conn,$sql4_6);
		$result4_7 = mysqli_query($conn,$sql4_7);
		$result4_8 = mysqli_query($conn,$sql4_8);//FOURTH database ends
		
		$sql5_1= "SELECT AVG(grade1) FROM EC504B";//Fifth database starts
		$sql5_2= "SELECT AVG(grade2) FROM EC504B";
		$sql5_3= "SELECT AVG(grade3) FROM EC504B";
		$sql5_4= "SELECT AVG(grade4) FROM EC504B";
		$sql5_5= "SELECT AVG(grade5) FROM EC504B";
		$sql5_6= "SELECT AVG(grade6) FROM EC504B";
		$sql5_7= "SELECT AVG(grade7) FROM EC504B";
		$sql5_8= "SELECT AVG(grade8) FROM EC504B";
    		$result5_1 = mysqli_query($conn,$sql5_1);
		$result5_2 = mysqli_query($conn,$sql5_2);
		$result5_3 = mysqli_query($conn,$sql5_3);
		$result5_4 = mysqli_query($conn,$sql5_4);
		$result5_5 = mysqli_query($conn,$sql5_5);
		$result5_6 = mysqli_query($conn,$sql5_6);
		$result5_7 = mysqli_query($conn,$sql5_7);
		$result5_8 = mysqli_query($conn,$sql5_8);//Fifth database ends

		$sql6_1= "SELECT AVG(grade1) FROM EC591";//Sixth database starts
		$sql6_2= "SELECT AVG(grade2) FROM EC591";
		$sql6_3= "SELECT AVG(grade3) FROM EC591";
		$sql6_4= "SELECT AVG(grade4) FROM EC591";
		$sql6_5= "SELECT AVG(grade5) FROM EC591";
		$sql6_6= "SELECT AVG(grade6) FROM EC591";
		$sql6_7= "SELECT AVG(grade7) FROM EC591";
		$sql6_8= "SELECT AVG(grade8) FROM EC591";
    		$result6_1 = mysqli_query($conn,$sql6_1);
		$result6_2 = mysqli_query($conn,$sql6_2);
		$result6_3 = mysqli_query($conn,$sql6_3);
		$result6_4 = mysqli_query($conn,$sql6_4);
		$result6_5 = mysqli_query($conn,$sql6_5);
		$result6_6 = mysqli_query($conn,$sql6_6);
		$result6_7 = mysqli_query($conn,$sql6_7);
		$result6_8 = mysqli_query($conn,$sql6_8);//Sixth database ends
		
		$sql7_1= "SELECT AVG(grade1) FROM EC592";//Seventh database starts
		$sql7_2= "SELECT AVG(grade2) FROM EC592";
		$sql7_3= "SELECT AVG(grade3) FROM EC592";
		$sql7_4= "SELECT AVG(grade4) FROM EC592";
		$sql7_5= "SELECT AVG(grade5) FROM EC592";
		$sql7_6= "SELECT AVG(grade6) FROM EC592";
		$sql7_7= "SELECT AVG(grade7) FROM EC592";
		$sql7_8= "SELECT AVG(grade8) FROM EC592";
    		$result7_1 = mysqli_query($conn,$sql7_1);
		$result7_2 = mysqli_query($conn,$sql7_2);
		$result7_3 = mysqli_query($conn,$sql7_3);
		$result7_4 = mysqli_query($conn,$sql7_4);
		$result7_5 = mysqli_query($conn,$sql7_5);
		$result7_6 = mysqli_query($conn,$sql7_6);
		$result7_7 = mysqli_query($conn,$sql7_7);
		$result7_8 = mysqli_query($conn,$sql7_8);//Seventh database ends

		$sql8_1= "SELECT AVG(grade1) FROM EC593";//Eighth database starts
		$sql8_2= "SELECT AVG(grade2) FROM EC593";
		$sql8_3= "SELECT AVG(grade3) FROM EC593";
		$sql8_4= "SELECT AVG(grade4) FROM EC593";
		$sql8_5= "SELECT AVG(grade5) FROM EC593";
		$sql8_6= "SELECT AVG(grade6) FROM EC593";
		$sql8_7= "SELECT AVG(grade7) FROM EC593";
		$sql8_8= "SELECT AVG(grade8) FROM EC593";
    		$result8_1 = mysqli_query($conn,$sql8_1);
		$result8_2 = mysqli_query($conn,$sql8_2);
		$result8_3 = mysqli_query($conn,$sql8_3);
		$result8_4 = mysqli_query($conn,$sql8_4);
		$result8_5 = mysqli_query($conn,$sql8_5);
		$result8_6 = mysqli_query($conn,$sql8_6);
		$result8_7 = mysqli_query($conn,$sql8_7);
		$result8_8 = mysqli_query($conn,$sql8_8);//Eighth database ends

		$sql9_1= "SELECT AVG(grade1) FROM EC594B";//ninth database starts
		$sql9_2= "SELECT AVG(grade2) FROM EC594B";
		$sql9_3= "SELECT AVG(grade3) FROM EC594B";
		$sql9_4= "SELECT AVG(grade4) FROM EC594B";
		$sql9_5= "SELECT AVG(grade5) FROM EC594B";
		$sql9_6= "SELECT AVG(grade6) FROM EC594B";
		$sql9_7= "SELECT AVG(grade7) FROM EC594B";
		$sql9_8= "SELECT AVG(grade8) FROM EC594B";
    		$result9_1 = mysqli_query($conn,$sql9_1);
		$result9_2 = mysqli_query($conn,$sql9_2);
		$result9_3 = mysqli_query($conn,$sql9_3);
		$result9_4 = mysqli_query($conn,$sql9_4);
		$result9_5 = mysqli_query($conn,$sql9_5);
		$result9_6 = mysqli_query($conn,$sql9_6);
		$result9_7 = mysqli_query($conn,$sql9_7);
		$result9_8 = mysqli_query($conn,$sql9_8);//ninth database ends

		$sql10_1= "SELECT AVG(grade1) FROM EC392";//tenth database starts
		$sql10_2= "SELECT AVG(grade2) FROM EC392";
		$sql10_3= "SELECT AVG(grade3) FROM EC392";
		$sql10_4= "SELECT AVG(grade4) FROM EC392";
		$sql10_5= "SELECT AVG(grade5) FROM EC392";
		$sql10_6= "SELECT AVG(grade6) FROM EC392";
		$sql10_7= "SELECT AVG(grade7) FROM EC392";
		$sql10_8= "SELECT AVG(grade8) FROM EC392";
    		$result10_1 = mysqli_query($conn,$sql10_1);
		$result10_2 = mysqli_query($conn,$sql10_2);
		$result10_3 = mysqli_query($conn,$sql10_3);
		$result10_4 = mysqli_query($conn,$sql10_4);
		$result10_5 = mysqli_query($conn,$sql10_5);
		$result10_6 = mysqli_query($conn,$sql10_6);
		$result10_7 = mysqli_query($conn,$sql10_7);
		$result10_8 = mysqli_query($conn,$sql10_8);//tenth database ends

		$sql11_1= "SELECT AVG(grade1) FROM EC393";//ELEVENTH database starts
		$sql11_2= "SELECT AVG(grade2) FROM EC393";
		$sql11_3= "SELECT AVG(grade3) FROM EC393";
		$sql11_4= "SELECT AVG(grade4) FROM EC393";
		$sql11_5= "SELECT AVG(grade5) FROM EC393";
		$sql11_6= "SELECT AVG(grade6) FROM EC393";
		$sql11_7= "SELECT AVG(grade7) FROM EC393";
		$sql11_8= "SELECT AVG(grade8) FROM EC393";
    		$result11_1 = mysqli_query($conn,$sql11_1);
		$result11_2 = mysqli_query($conn,$sql11_2);
		$result11_3 = mysqli_query($conn,$sql11_3);
		$result11_4 = mysqli_query($conn,$sql11_4);
		$result11_5 = mysqli_query($conn,$sql11_5);
		$result11_6 = mysqli_query($conn,$sql11_6);
		$result11_7 = mysqli_query($conn,$sql11_7);
		$result11_8 = mysqli_query($conn,$sql11_8);//ELEVENTH database ends


		$sql12_1= "SELECT AVG(grade1) FROM EC394";//TWELFTH database starts
		$sql12_2= "SELECT AVG(grade2) FROM EC394";
		$sql12_3= "SELECT AVG(grade3) FROM EC394";
		$sql12_4= "SELECT AVG(grade4) FROM EC394";
		$sql12_5= "SELECT AVG(grade5) FROM EC394";
		$sql12_6= "SELECT AVG(grade6) FROM EC394";
		$sql12_7= "SELECT AVG(grade7) FROM EC394";
		$sql12_8= "SELECT AVG(grade8) FROM EC394";
    		$result12_1 = mysqli_query($conn,$sql12_1);
		$result12_2 = mysqli_query($conn,$sql12_2);
		$result12_3 = mysqli_query($conn,$sql12_3);
		$result12_4 = mysqli_query($conn,$sql12_4);
		$result12_5 = mysqli_query($conn,$sql12_5);
		$result12_6 = mysqli_query($conn,$sql12_6);
		$result12_7 = mysqli_query($conn,$sql12_7);
		$result12_8 = mysqli_query($conn,$sql12_8);//TWELFTH database ends







    		//if (!$result1_1) {
       		//die(mysqli_error($conn));
    		//}

		?>
			<div class="wrapper">
				
	<!--first row-->	<div class="a1">
					<div class="b1">
					<?php   
	
					echo "SUBJECT";
          	
					?>
					</div>
					<div class="b1">
					<?php   
					echo "SUBJECT CODE:"
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "PUNCTUALITY in TAKING CLASS";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "KNOWLEDGE of SUBJECTS";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "CLEAR ORAL & COMMUNICATION";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "PROPER USE CHALKBOARD/PPT";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "APPROPIATE TEACHING SPEED";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "DERIVATIONS<br>/WORK SHEETS";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "GUIDANCE in ASSIGNMENTS";
					?>
					</div>
					<div class="b1">
					<?php   
					echo"SELF-LEARNING ASSIGNMENTS";
					?>
					</div>
				</div>
<!--second row-->		<div class="a1">
					<div class="b1">
					<?php   
					echo "ECONOMICS for ENGINEERS";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "HU501"
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:DR";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result1_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result1_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result1_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result1_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result1_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result1_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result1_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result1_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
<!--THIRD row-->		<div class="a1">
					<div class="b1">
					<?php   
					echo "ANALOG COMMUNICATION";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "EC501";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:BC";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result2_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result2_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result2_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result2_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result2_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result2_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result2_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result2_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
				<div class="a1">
<!--fourth row-->			<div class="b1">
					<?php   
					echo "MICROPRO-<br>CESSOR";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "EC502";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:MS";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result3_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result3_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result3_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result3_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result3_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result3_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result3_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result3_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
<!--fifth row-->		<div class="a1">
					<div class="b1">
					<?php   
					echo "CONTROL SYSTEM";
					?>
					</div>
					<div class="b1">
					<?php   
					echo"EC503";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:MS";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result4_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result4_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result4_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result4_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result4_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result4_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result4_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result4_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
<!--sixth row-->		<div class="a1">
					<div class="b1">
					<?php   
					echo "DATA STRUCTURE &C";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "EC504B";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:BKC";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result5_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result5_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result5_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result5_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result5_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result5_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result5_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result5_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
<!--seventh row-->		<div class="a1">
					<div class="b1">
					<?php   
					echo "ANALOG COMMU-<br>NICATION LAB";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "EC591";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:BC";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result6_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result6_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result6_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result6_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result6_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result6_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result6_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result6_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
<!--eight row-->		<div class="a1">
					<div class="b1">
					<?php   
					echo "MICRO-<br>PROCESSOR LAB";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "EC592";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:MS";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result7_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result7_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result7_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result7_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result7_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result7_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result7_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result7_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
<!--ninth row-->		<div class="a1">
					<div class="b1">
					<?php   
					echo "CONTROL SYSTEM LAB";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "EC593";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:MS";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result8_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result8_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result8_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result8_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result8_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result8_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result8_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result8_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
<!--tenth row-->		<div class="a1">
					<div class="b1">
					<?php   
					echo "DATA STRUCTURE & C LAB";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "EC594B";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:BKC";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result9_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result9_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result9_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result9_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result9_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result9_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result9_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result9_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
<!--eleventh row--		<div class="a1">
					<div class="b1">
					<?php   
					echo "SOLID STATE DEVICE LAB";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "EC392";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:HM";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result10_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result10_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result10_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result10_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result10_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result10_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result10_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result10_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
<!--twelvth row--		<div class="a1">
					<div class="b1">
					<?php   
					echo "SIGNAL & SYSTEM LAB";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "EC393";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:TSD";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result11_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result11_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result11_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result11_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result11_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result11_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result11_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result11_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>
<!--thirteenth row--		<div class="a1">
					<div class="b1">
					<?php   
					echo "ANALOG LAB";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "EC394";
					?>
					</div>
					<div class="b1">
					<?php   
					echo "FACULTY:SM";
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result12_1)) {           					
           				$sum=$row['AVG(grade1)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result12_2)) {           					
           				$sum=$row['AVG(grade2)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result12_3)) {           					
           				$sum=$row['AVG(grade3)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result12_4)) {           					
           				$sum=$row['AVG(grade4)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result12_5)) {           					
           				$sum=$row['AVG(grade5)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result12_6)) {           					
           				$sum=$row['AVG(grade6)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result12_7)) {           					
           				$sum=$row['AVG(grade7)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
					<div class="b1">
					<?php   
					$flag=0; 		
    				while ($row=mysqli_fetch_array($result12_8)) {           					
           				$sum=$row['AVG(grade8)'];
				
          			
    				} echo $sum;
    				mysqli_close($conn);
					?>
					</div>
				</div>-->
				<div>
					<input id="w" type="button" name="PRINT" value="PRINT"/>
				</div>
			</div>
			

	<script type="text/javascript" src="../js/java1.js"></script>
	</body>
</html>
