
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
            <center><u>Add Judge</u></center>
                  
               <center>  
                  <form action="addj.php" method="POST" class="form1">
                  <center>
                       <table class="table2">
                      
                        <tr>
                              <td>Judge Id</td>
                              <td>
                                    <input type="text" name="j_id" placeholder="Enter Judge Id...">
                              </td>
                        </tr>
                         <tr>
                              <td>Judge Name</td>
                              <td>
									<input type="text" name="j_name" placeholder="Enter Judge Name...">
							  </td>
                        </tr>
                        <tr>
                              <td>Court</td>
                              <td>
									<select name="court">
										<option></option>
										<option>Supreme Court</option>
										<option>High Court</option>
										<option>District Court</option>
                                    </select>
                              </td>
                        </tr>

                        
                  </table> <br>
                  <input type="submit" name="btn" class="btn" value="Add Judge"></center>
                  </center>
                  
                  </form>
                  </center> 
                  
            	
            	<?php
            	extract($_POST);
				include '../connect.php';
            	if (isset($btn)) {
            		$query=mysqli_query($conn,"INSERT INTO `judge` VALUES ($j_id,'$j_name','$court')");
            		if (!empty($query)) {
            			echo "New Judge is Successful Added<br>";
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