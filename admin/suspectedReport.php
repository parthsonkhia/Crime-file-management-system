<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
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

            <div class="header"> <img src="image/logo1.jpg" height="120px" width="900px">



            </div>

            <div class="content">
                  <div class="menu">
                        <table class="table">
                              <tr> 
                                    <td><a href="index.php">Home</a></td>
                                    <td><a href="add.php">Add User</a></td>
                                    <td><a href="delete.php">Delete User</a></td>
									<td><a href="addj.php">Add Judge</a></td>
                                    <td><a href="deleteo.php">Delete</a></td>
                                    <td><a href="search.php">Search</a></td>
                                    <td><a href="report.php">Report</a></td>
                                    <td><a href="logout.php">Logout</a></td>

                              </tr>
                        </table>
            </div><hr>
            <div class="area1">
            <center><u>Suspected People's Report</u></center><br>
          
                  
                  <center><table width="40%" class='search'>
                   <tr style='background-color: #999999'>
                        <th>No</th><th>Name</th><th>Age</th><th>Sex</th><th>Occupation</th><th>Address</th><th>View</th>
                   </tr>

                  <?php
                   include '../connect.php';
                   $query=mysqli_query($conn,"SELECT * FROM `suspect`");
                   $count=0;
                   while ($query_run=mysqli_fetch_array($query)) {
                         $name=$query_run['name'];
                         $age=$query_run['age'];
                         $sex=$query_run['sex'];
                         $job=$query_run['occupation'];
                         $address=$query_run['address'];
                         $count++;

                        echo"<tr style='background-color:#CFCFCF'>
                             
                                                      <td><center>$count</center></td>
                                                      <td><center>$name</center></td>
                                                      <td><center>$age<center></td>
                                                      <td><center>$sex</center></td>
                                                      <td><center>$job</center></td>
                                                      <td><center>$address</center></td>
                                                      <td><center><form action='viewSuspected.php?id=$name' method='POST'>
                                                      <button class='input' value='$name'>View</button></form></center></td>
                        </tr>";
                        }
                  ?>
                   </table></center>


            </div>
        </div>

		<div class="footer">Parth Sonkhia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gaurang Agnihotri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aalap Patil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abhishek Pradhan

		</div>



      </div>
</body>
</html>