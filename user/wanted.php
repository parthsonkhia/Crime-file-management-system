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
            <center><u>Most Wanted Peoples</u></center><br>
            	
            	<form action="wanted.php" method="POST" enctype="multipart/form-data" class="form1" >
                  <center>
                       <table class="table2">
                        
                        <tr>
                              <td>Full Name</td>
                              <td>
                                    <input type="text" placeholder="Full Name..." name="name">
                              </td>
                              
                        </tr>
                        <tr>
                              <td>Nick Name</td>
                              <td>
                                    <input type="text" placeholder="Nick Name..." name="nickname">
                              </td>
                        </tr>
                        <tr>
                              <td>Age</td>
                              <td>
                                    <input type="text" placeholder="Age..." name="age">
                              </td>
                        </tr>
                        <tr>
                              <td placeholder="sex">Sex</td>
                              <td>
                                    <select name="sex">
                                    	<option></option>
                                    	<option value="male">Male</option>
                                    	<option value="female">Female</option>

                                    </select>
                              </td>
                        </tr>
                         <tr>
                              <td>Place</td>
                              <td>
                                    <input type="text" placeholder="Place..." name="place">
                              </td>
                        </tr>
                        
                        <tr>
                              <td>Description</td>
                              <td>

                                   <textarea class="textarea3" placeholder="Description..." name="description"></textarea>
                                   	 
                              </td>
                        </tr>
                       
                  </table> 
                  <input type="submit" name="btn" class="btn" value="Add"></center>
                  </center>
                  
            	</form>
            	
            	              <?php
  require '../connect.php';
  if (isset($_POST['btn'])) {
  
    if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 900000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
      $name=$_POST['name'];
      $date=date("Y/m/d");
      $price=$_POST['price'];
      $type=$_POST['type'];
      $nickname=$_POST['nickname'];
      $age=$_POST['age'];
      $sex=$_POST['sex'];
      $place=$_POST['place'];
      $description=$_POST['description'];
      $query=mysqli_query($conn,"INSERT INTO `wanted` VALUES ('','$name','$nickname','$sex','$age','$date','$place','$description')");
      if (!$query) {
        echo mysqli_error($conn);
      }

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
     
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../upload" . $_FILES["file"]["name"]);
      echo "successfull inserted";
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  }

?>
            </div>
        </div>

		<div class="footer">Parth Sonkhia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gaurang Agnihotri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aalap Patil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abhishek Pradhan

		</div>



	</div>
</body>
</html>