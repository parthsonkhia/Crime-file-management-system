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

            <div class="content21">
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
            <center><u>Postmortem Report</u><table  class="t">
                  
                  <center> <table>
                        <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysqli_query($conn,"SELECT * FROM `postmortem` WHERE  `name`='$idd'");
                   $query_run=mysqli_fetch_array($query);
						?>
                  </table></center>
                 <center> <table  class="t">



                 

                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysqli_query($conn,"SELECT * FROM `postmortem` WHERE  `name`='$idd'");
                   $query_run=mysqli_fetch_array($query);
                   $name=$query_run['name'];
                   $sex=$query_run['sex'];
                   $FirNo=$query_run['FirNo'];
                   $ResultMortem=$query_run['ResultMortem'];
                   $info=$query_run['info'];
                   $place=$query_run['House'];
                   $docta=$query_run['Doctor'];
                   
                   
                  
                              echo "
                              
                              <tr style='background-color:#CFCFCF'>
                              <td>Name</td>
                                    <td>$name</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Sex</td>
                                    <td>$sex</td>
                              </tr>
                              
                              <tr style='background-color:#CFCFCF'>
                              <td>Fir No</td>
                                    <td>$FirNo</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Result Mortem</td>
                                    <td>$ResultMortem</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Information</td>
                                    <td>$info</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Place</td>
                                    <td>$place</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Doctor</td>
                                    <td>$docta</td>
                              </tr>";
                             ?>
                   </table>
                              <button onclick="window.print()" class="print">print</button>
                  </center>


            </div>
        </div>

		<div class="footer">Parth Sonkhia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gaurang Agnihotri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aalap Patil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abhishek Pradhan

		</div>



      </div>
</body>
</html>