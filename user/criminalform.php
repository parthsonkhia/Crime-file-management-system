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

		<div class="content1">
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
            <center><u>Register Criminal </u></center>
            	
            	<form action="criminalform.php" method="POST" class="form1" enctype="multipart/form-data">
                  <center>
                       <table>
                        <tr>
                        
                              


            </tr></table><center>
                           <table class="table2"><tr>
                              <td>ID No</td>
                              <td><input type="text" name="IDno" placeholder="ID No... "></td>
                              
                                    
                           </tr>
                        <tr>
                              <td>Criminal Name</td>
                              <td><input type="text" name="name" placeholder="Criminal Name... "></td>
                                    
                         </tr>
                       

                        <tr>
                              <td>Criminal Nickname</td>
                              <td>
                                    <input type="text" name="nickname" placeholder="Criminal Nickname...">
                              </td>
                        </tr>
                         <tr>
                              <td>Sex</td>
                              <td>
                                    <select name="sex">
                                          <option></option>
                                          <option>Male</option>
                                          <option>Female</option>
                                    </select>
                              </td>
                        </tr>
                        <tr>
                              <td>Age</td>
                              <td>
                                    <input type="number" name="age" placeholder="Age...">
                              </td>
                        </tr>
                        <tr>
                              <td>Occupation</td>
                              <td>
                                    <input type="text" name="occupation" placeholder="Occupation...">
                              </td>
                        </tr>
                        <tr>
                              <td>Crime type</td>
                              <td>
                                    <input type="text" name="crimetype" placeholder="Crime type...">
                              </td>
                        </tr>
                        <tr>
                              <td>Address</td>
                              <td>
                                    <input type="text" name="adress" placeholder="Address...">
                              </td>
                        </tr>
                        <tr><td>Most Wanted</td>
                              <td>
                                   Yes<input type="radio" name="wanted" value="MostWanted"> 
                                    <br>
                                      No
                                     <input type="radio" name="wanted" value="NotMostWanted">
                                  </td>
                                   
                           
                        </tr>
                  </table> 
                  <input type="submit" name="btn" class="btn" value="Add"></center>
                  </center>
                  
            	</form>
            	
            	
            	<?php


              if (isset($_POST['btn'])) 
              {
						  $IDno=$_POST['IDno'];
						  $name=$_POST['name'];
						  $nickname=$_POST['nickname'];
						  $age=$_POST['age'];
						  $occupation=$_POST['occupation'];
						  $crimetype=$_POST['crimetype'];
						  $adress=$_POST['adress'];
						  $wanted=$_POST['wanted'];
						  require '../connect.php';
						  $query=mysqli_query($conn,"INSERT INTO `criminal` VALUES ('','$IDno','$name','$nickname','$sex','$age','$occupation','$crimetype','$adress','$wanted')");
						  if (!empty($query)) {
							  echo "Criminal Succesiful Added.<br>";
							  }
						  else
						  {
							  echo "Please check the details entered.<br>";
						  }
						  
			  }
								  
								  
            	?>


            </div>
        </div>

		<div class="footer">Parth Sonkhia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gaurang Agnihotri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aalap Patil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abhishek Pradhan

		</div>



	</div>
</body>
</html>