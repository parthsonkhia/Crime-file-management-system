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
            <center><u>Delete</u></center>
                  
                 <form action="delete.php" method="POST" class="form1">
                  <center>
                       <table class="table2">
                      
                        <tr></tr>
                             <tr><td><a href="deletej.php">Delete Judge</a></td></tr>
							 <tr><td><a href="deletec.php">Delete Criminal</a></td></tr>
							 <tr><td><a href="deletef.php">Delete Case</a></td></tr>
							 <tr><td><a href="deletepm.php">Delete Postmortem Report</a></td></tr>
							 <tr><td><a href="deleteco.php">Delete Complains</a></td></tr>
							 <tr><td><a href="deletemw.php">Delete Most Wanted</a></td></tr>
							 <tr><td><a href="deletes.php">Delete Suspects</a></td></tr>
							  
                   
                       </table> 
                         </center>
                  </center>
                  
                  </form>
                
                  
            	
            	
            </div>
        </div>

		<div class="footer">Parth Sonkhia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gaurang Agnihotri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aalap Patil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abhishek Pradhan

		</div>



	</div>
</body>
</html>