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
            <center><u>Delete Case</u></center>
                  
                 <form action="deletef.php" method="POST" class="form1">
                  <center>
                       <table class="table2">
                      
                        <tr>
                              <td>Select Case ID</td>
                              <td>
                                   <select placeholder="enter user name">
                                    <option></option>
                                    <?php
                                    require '../connect.php';
                                    $query=mysqli_query($conn,"SELECT * FROM `crime`");
                                    while ($row=mysqli_fetch_array($query)) {
                                     $case_id=$row['case_id'];
                                     echo "<option>$case_id</option>";
                                    }
                                    ?>
                                          
                                    </select>
                              </td>
                        </tr>
                       </table> 
                         <input type="submit" name="btn" class="btn" value="Delete"></center>
                  </center>
                  
                  </form>
                
                  
            	
            	<?php
            	extract($_POST);
            	if (isset($btn)) {
            		$query=mysqli_query($conn,"DELETE FROM `crime` WHERE `case_id`='$case_id'");
            		if (!empty($query)) {
            			echo "Case Deleted...<br><br>

                  <a href='deletef.php'>Click her to refresh page</a>";
            		}
            		else	
            		{
            			echo mysqli_error($conn);
            		}
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