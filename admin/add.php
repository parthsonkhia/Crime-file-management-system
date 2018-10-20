
<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?><html>
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
            <center><u>Add User</u></center>
                  
               <center>  
                  <form action="add.php" method="POST" class="form1">
                  <center>
                       <table class="table2">
                      
                        <tr>
                              <td>User Id</td>
                              <td>
                                    <input type="text" name="username" placeholder="Enter User Id...">
                              </td>
                        </tr>
                         <tr>
                              <td>Type of User</td>
                              <td>
                                    <select name="usertype">
                                          <option></option>
                                          <option>admin</option>
                                          <option>user</option>
                                    </select>
                                     
                              </td>

                        </tr>
                        <tr>
                              <td>Password</td>
                              <td>
                                    <input type="password" name="password" placeholder="Enter Password">
                              </td>
                        </tr>

                        
                  </table> <br>
                  <input type="submit" name="btn" class="btn" value="Add User"></center>
                  </center>
                  
                  </form>
                  </center> 
                  
            	
            	<?php
            	extract($_POST);
				include '../connect.php';
            	if (isset($btn)) {
            		$query=mysqli_query($conn,"INSERT INTO `login` VALUES ('$username','$usertype','$password')");
            		if (!empty($query)) {
            			echo "New User is Successful Added<br>";
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