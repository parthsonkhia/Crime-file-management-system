<?php
session_start();
if (empty($_SESSION['usertypeu']))
{
       header("location: ../index.php");
}
?>
<html>
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
            <center><u>Add PostMortem</u></center>
            	
            	<form action="postmortem.php" method="POST" enctype="multipart/form-data" class="form1" >
                  <center>
                       <table class="table2">
                       
                        <tr>
                              <td>Full Name</td>
                              <td>
                                    <input type="text" placeholder="Full Name..." name="name">
                              </td> 

                              </center>
          

              </td>  

                        </tr>
                        <tr>
                              <td placeholder="sex">Sex</td>
                              <td>
                                    <select name="sex">
                                    	<option></option>
                                    	<option>Male</option>
                                    	<option>Female</option>

                                    </select>
                              </td>
                        </tr>
                        <tr>
                              <td>FIR No</td>
                              <td>
                                    <input type="text" placeholder="FIR no..." name="FirNo">
                              </td>
                        </tr>
                        <tr>
                              <td>Result of Mortem</td>
                              <td>
                                     <textarea class="textarea3" placeholder="Descriptipn of Case..." name="ResultMortem"></textarea>
                              </td>
                        </tr>
                        <tr>
                              <td>Date of Death</td>
                              <td>
                                    <input type="text" placeholder="Date of death..." name="DateDeath">
                              </td>
                        </tr>
                        <tr>
                              <td>Description of Case</td>
                              <td>

                                   <textarea class="textarea3" placeholder="Descriptipn of Case..." name="info"></textarea>
                                   	 
                              </td>
                        </tr>
                        <tr>
                              <td>Place</td>
                              <td>
                              	     <input type="text" placeholder="Place..." name="House">
                                   
                              </td>
                        </tr> <tr>
                              <td>Doctor's Name</td>
                              <td>
                              	     <input type="text" placeholder="Doctor's name..." name="Doctor">
                                   
                              </td>
                        </tr>
                  </table> 
                  <input type="submit" name="btn" class="btn" value="Add"></center>
                  </center>
                  
            	</form>
            	
            	
                         
  <?php
  require '../connect.php';
  if (isset($_POST['btn'])) {
       $sex=$_POST['sex'];
      $name=$_POST['name'];
      $FirNo=$_POST['FirNo'];
      $ResultMortem=$_POST['ResultMortem'];
      $DateDeath=date("Y/m/d");
      $info=$_POST['info'];
      $House=$_POST['House'];
      $Doctor=$_POST['Doctor'];
      $query=mysqli_query($conn,"INSERT INTO `postmortem` VALUES ('','$name','$sex','$FirNo','$ResultMortem','$DateDeath','$info','$House','$Doctor')");
      if (!empty($query)) {
        echo "<center>PostMortem added Successiful</center>";
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