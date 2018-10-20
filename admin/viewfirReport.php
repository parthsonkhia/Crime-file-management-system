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
            <center><u>First Information Report (FIR)</u><table  class="t">
                   <tr style='background-color: #999999'>
                   </tr>
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysqli_query($conn,"SELECT * FROM `crime` WHERE  `case_id`='$idd'");
                   $query_run=mysqli_fetch_array($query);
                   $firno=$query_run['case_id'];
                   $date=$query_run['date'];
                   $adress=$query_run['address'];
                   $district=$query_run['district'];
                   $place=$query_run['place'];
                   $infotype=$query_run['infotype'];
                   $info=$query_run['info'];
				   $j_id=$query_run['j_id'];
                              echo "
                              
                              <tr style='background-color:#CFCFCF'>
                              <td>FIR No</td>
                                    <td>$firno</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Date</td>
                                    <td>$date</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Address</td>
                                    <td>$adress</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>District</td>
                                    <td>$district</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Place</td>
                                    <td>$place</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Info Type</td>
                                    <td>$infotype</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Info</td>
                                    <td>$info</td>
                              </tr>
							  <tr style='background-color:#CFCFCF'>
							  <td>Judge ID</td>
									<td>$j_id</td>
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