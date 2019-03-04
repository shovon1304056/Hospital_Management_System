<!DOCTYPE html>

<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

				<!-- Bootstrap CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
				</head>

				<body>

<?php

include("func.php");

if(isset($_POST['patient_search_submit']))
{
	$contact=$_POST['search'];
	$query="select * from doctorapp where contact='$contact'";
	
	
	$result=mysqli_query($con,$query);
	
	echo"<div class='container' style='margin-top:50px;'>
	<div class='card'>
	<div class='card-body'><a href='patient_details.php' class='btn btn-light'>Go Back</a></div>
	<img src='images/12.png' class='card-img-top' style='background-size: cover;height:300px;'>
	
	<div class='card-body' style='background-color:#3489DB;color:#ffffff;'>
										<table class='table table-hover'>
											<thead>
												<tr>

													<th >First Name</th>
													<th >Last Name</th>
													<th >E-mail</th>
													<th >Contact</th>
													<th >Doctor Appointment</th>
												</tr>
											</thead>
											<tbody>
											
							</div>
							</div>";
	
	while($row=mysqli_fetch_array($result)){
		
		$fname=$row['fname'];
		$lname=$row['lname'];
		$email=$row['email'];
		$contact=$row['contact'];
		$docapp=$row['docapp'];
		
		echo"<tr>
			
			<td>$fname</td>
			<td>$lname</td>
			<td>$email</td>
			<td>$contact</td>
			<td>$docapp</td>
		</tr>";
		
		
		
		echo"</tbody></table></div></div></div>";
	}
	
	
}


?>



								<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"/>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"/>
								<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"/>
							</body>
						</html>
						