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
            <center><u>Add First Information Report (FIR)</u></center><br>
            	
            	<form action="firReport.php" method="POST" class="form1">
                  <center>
                       <table class="table2">
                        <tr>
                              <td>Case ID</td>
                              <td>
                                    <input type="text" name="case_id" placeholder="Case ID...">
                              </td>
                        </tr>
                        <tr>
                              <td>Informal Address</td>
                              <td>
                                    <input type="text" name="address" placeholder="Informal Address...">
                              </td>
                        </tr>
                        <tr>
                              <td>District</td>
                              <td>
                                    <input type="text" name="district" placeholder="District...">
                              </td>
                        </tr>
                        <tr>
                              <td>Foreign/Local</td>
                              <td>
                                    <select name="choose" placeholder="Foreign/Local...">
                                          <option></option>
                                          <option value="Foreign">Foreign</option>
                                          <option value="Local">Local</option>
                                    </select>
                              </td>
                        </tr>
                        <tr>
                              <td>Place of Occurance</td>
                              <td>
                                    <input type="text" name="place" placeholder="Place of Occurance...">
                              </td>
                        </tr>
                        <tr>
                              <td>Info Type</td>
                              <td>
                                    <input type="text" name="infotype" placeholder="Info type ...">
                              </td>
                        </tr>
                        
                        <tr>
                              <td>Infomation Received</td>
                              <td>
                                    <textarea class="textarea2" placeholder="Add information here..." name="info"></textarea>
                                    
                              </td>
                        </tr>
						
                        <tr>
                              <td>Judge</td>
                              <td>
                                    <textarea class="text" placeholder="Judge ID" name="j_id"></textarea>
                                    
                              </td>
                        </tr>
                  </table> <br>
                  <input type="submit" name="btn" class="btn" value="Add"></center>
                  </center>
                  
            	</form>
            	
            	
            	<?php
            	extract($_POST);
				require '../connect.php';
            	if (isset($btn)) {
            		$date=date('Y.m.d');
            		$query=mysqli_query($conn,"INSERT INTO `crime` VALUES ('','$case_id','$date','$address','$district','$place','$infotype','$info','$j_id')");
            		if (!empty($query)) 
                        {
            			echo "FIR Succesiful Added<br>";
            		}
            		else	
            		{
            			echo mysqli_error($conn);
            		}
            	}
                   elseif (isset($btn)&&empty($firno)||empty($date)||empty($address)||empty($district)||empty($choose)||empty($place)||empty($infotype)||empty($info))
                   {
                       echo "all figure required";
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