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
            <center><u>Criminal Registered Report</u><table  class="t">
                  <table>
                        <?php 
                        
                             include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysqli_query($conn,"SELECT * FROM `criminal` WHERE  `iDno`='$idd'");
                   $query_run=mysqli_fetch_array($query);
                      
                  
                        ?>

                  </table>
                  <table  class="t">
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysqli_query($conn,"SELECT * FROM `criminal` WHERE  `iDno`='$idd'");
                   $query_run=mysqli_fetch_array($query);
                   $ido=$query_run['IDno'];
                   $name=$query_run['name'];
                   $nickname=$query_run['nickname'];
                   $age=$query_run['age'];
                   $sex=$query_run['sex'];
                   $occupation=$query_run['occupation'];
                   $crimetype=$query_run['crimetype'];
                   $adress=$query_run['adress'];
                  
                   

             
                              
                              
                              echo "<tr style='background-color:#CFCFCF'>

                              <td>Id</td>
                                    <td>$ido</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Name</td>
                                    <td>$name</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Nickname</td>
                                    <td>$nickname</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Sex</td>
                                    <td>$sex</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Age</td>
                                    <td>$age</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Occupation</td>
                                    <td>$occupation</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Crimetype</td>
                                    <td>$crimetype</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Address</td>
                                    <td>$adress</td>
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