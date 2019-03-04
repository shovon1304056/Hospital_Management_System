<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

				<!-- Bootstrap CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
				</head>

				<body>
					<div class = "jumbotron" style="background:url('images/11.jpg')no-repeat; background-size: cover;height:300px;"/>
					<div class="container">

						<div class ="card">
							<div class="card-body" style="background-color:#3489DB;color:#ffffff;">
								<div class="row">
									<div class="col-md-1">
										<a href="admin-panel.php" class="btn btn-light">Go Back</a>
									</div>
									<div class="col-md-3" >
										<h3>Patient Details</h3>
									</div>
									<div class="col-md-8" >
										<form class="form-group" action="patient_search.php" method="post">
											<div class="row">
											
												<div class="col-md-10">
													<input type="text" name="search" class="form-control" placeholder="enter contact number">
													</div>
													<div class="col-md-2">
														<input type="submit" name="patient_search_submit" class="btn btn-light" value="Search">
														</div>




													</form>
												</div>
											</div>
										</div>
									</div>

									<div class="card-body" style="background-color:#3489DB;color:#ffffff;">
										<table class="table table-hover">
											<thead>
												<tr>

													<th scope="col">First Name</th>
													<th scope="col">Last Name</th>
													<th scope="col">E-mail</th>
													<th scope="col">Contact</th>
													<th scope="col">Doctor Appointment</th>
												</tr>
											</thead>
											<tbody>
												<?php  get_patient_details(); ?>

												<!--
					<tr>
					  
					  <td>Jacob</td>
					  <td>Thornton</td>
					  <td>@fat</td>
					</tr> 
					<tr>
					  
					  <td colspan="2">Larry the Bird</td>
					  <td>@twitter</td>
					</tr>
				-->	
											</tbody>
										</table>


									</div>										
								</div>









								<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"/>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"/>
								<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"/>
							</body>
						</html>
						