<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
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
            <center><u>Report</u></center><br>
            	
            	
            	<table class="report">
                        <tr>
                              <td>Total Registered Criminal</td>
                              <td>
                                    <?php
                                    require '../connect.php';
                                    $query=mysqli_query($conn,"SELECT * FROM `criminal`");
                                    $row=mysqli_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>

                              <td><center><form action="RegCriminalReport.php" methode="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                        </tr>
                        <tr>
                              <td>Total First Information Report (FIR)</td>
                              <td>
                                    <?php
                                    $query=mysqli_query($conn,"SELECT * FROM `crime`");
                                    $row=mysqli_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                              <td><center><form action="firReport.php" methode="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                        </tr>
                        <tr>
                              <td>Total Coplains Report</td>
                              <td>
                                    <?php
                                    $query=mysqli_query($conn,"SELECT * FROM `complain`");
                                    $row=mysqli_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                            <td><center><form action="coplainsReport.php" methode="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                        </tr>
                        <tr>
                              <td>Total PostMortem Report</td>
                              <td>
                                    <?php
                                    $query=mysqli_query($conn,"SELECT * FROM `postmortem`");
                                    $row=mysqli_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                              <td><center><form action="postmortemReport.php" methode="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                        </tr>
                        <tr>
                              <td>Total Most Wanted Report</td>
                              <td>
                                    <?php
                                    $query=mysqli_query($conn,"SELECT * FROM `wanted`");
                                    $row=mysqli_num_rows($query);
                                    echo $row;
                                    ?>
                                    
                              </td>
                              <td><center><form action="mostWantedReport.php" methode="POST">
                                                 <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>                      
                         </tr>
                        <tr>
                              <td>Total Suspected People Report</td>
                              <td>
                                    <?php
                                    $query=mysqli_query($conn,"SELECT * FROM `suspect`");
                                    $row=mysqli_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                              <td><center><form action="suspectedReport.php" methode="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                                 
                              
                        </tr>
                  </table>
            	


            </div>
        </div>
		
		<div>
		
		</div>

		<div class="footer">Parth Sonkhia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gaurang Agnihotri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aalap Patil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abhishek Pradhan

		</div>



	</div>
</body>
</html>