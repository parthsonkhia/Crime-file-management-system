<?php
session_start();
if (empty($_SESSION['usertypeu']))
{
       header("location: ../index.php");
}
?>
<html>
<head>
<title>
 Crime Information Management System
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="wrapper">

		<div class="header"><img src="image/logo1.jpg" height="120px" width="900px">



		</div>

		<div class="content">
			<div class="menu">
				<table class="table">
					<tr>
						<td><a href="cs.php">Complain status</a></td>
						<td><a href="firReport.php">FIR</a></td>
						<td><a href="criminalform.php">Criminal Registration</a></td>
                                    <td><a href="postmortem.php">PostMortem</a></td>
						<td><a href="wanted.php">Most Wanted</a></td>
                                    <td><a href="suspect.php">Suspects</a></td>
						<td><a href="search.php">Search</a></td>
                                    <td><a href="logout.php">Logout</a></td>
					</tr>
				</table>
            </div><hr>
            <div class="area1">
            <center><u>Add Complain Status</u></center><br>
            	
            		<form action="index.php" method="POST" class="form1">
            	<center><table class="table1">
            		<tr>
            			<td>ID No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            			<input type="text" name="IDno" class="input" placeholder="ID..." >
                        </td>
                        
            			<td>Full Name&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="text" name="name" class="input" placeholder="Full Name..." >
            		</tr>
            		<tr>
            			<td>Sex     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <select name="sex">
                                          <option></option>
                                          <option>Male</option>
                                          <option>Female</option>

                                    </select>
                                    
			  </td>
            			<td>Address  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="text" name="adress" class="input" placeholder="Address..." >
                                    &nbsp;&nbsp;&nbsp;
			  </td>
            		</tr>
            		<tr>
            			<td>Phone No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <input type="text" name="phone" class="input" placeholder="Phone Number...">
			            </td>
            			<td>Occupation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <input type="text" name="occupation" class="input" placeholder="Occupation...">
                              </td>
            		
            	</table>
            </center>
                         <br>

			  <center>Complain<br><textarea class="textarea1" placeholder="Add Complain..." name="complain"></textarea></center> 
			<center>
			<br>
			<input type="submit" name="btn" class="btn" value="Add"></center>
            	</form>
            	
            	
            	<?php

            	extract($_POST);
				require '../connect.php';
            	if (isset($btn)&&!empty($IDno)&&!empty($name)&&!empty($sex)&&!empty($adress)&&!empty($phone)&&!empty($occupation)&&!empty($complain))
                   {
            		$date=date('Y.m.d');
            		$query=mysqli_query($conn,"INSERT INTO `complain` VALUES ('','$IDno','$name','$sex','$adress','$phone','$occupation','time()','$date','$complain')");
            		if (!empty($query)) {
            			echo "Complain is Succesiful Added<br>";
            		}
            		else	
            		{
            			echo mysqli_error($conn);
            		}
            	}
                  elseif (isset($btn)&&empty($IDno)||empty($name)||empty($sex)||empty($adress)||empty($phone)||empty($occupation)||empty($complain))
                        {
                              echo "all figure required";
                        }
            	else
            	     {
            		      echo mysqli_error($conn);
            	     }
            	?>


            </div>
        </div>

		<div class="footer">Parth Sonkhia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gaurang Agnihotri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aalap Patil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abhishek Pradhan

		</div>



	</div>
</body>
</html>