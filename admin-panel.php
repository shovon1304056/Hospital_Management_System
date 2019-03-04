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
					<div class = "jumbotron" style="background:url('images/11.jpg')no-repeat; background-size: cover;height:300px;"/>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3">
								<div class="list-group">
									<a href="" class="list-group-item active" style="background-color:#000000;color:#ffffff;border-color:#3498DB;">Patients</a>
									<a href="patient_details.php" class="list-group-item ">Patient Details</a>
									<!--  <a href="" class="list-group-item ">Add New Patient</a> -->
									<a href="" class="list-group-item ">Payment/Checkout</a>
								</div>

								<hr>

									<div class="list-group">
										<a href="" class="list-group-item active" style="background-color:#000000;color:#ffffff; border-color:#3498DB;">Staffs</a>
										<a href="" class="list-group-item ">Staff Details</a>
										<a href="" class="list-group-item ">Add New Staff</a>
										<a href="" class="list-group-item ">EX Staffs</a>
									</div>

								</div>
								<div class="col-md-8">
									<div class ="card">
										<div class="card-body" style="background-color:#000000;color:#ffffff;">
											BOOK an APPOINTMENT

											</div>

											<div class="card-body">

											 <form class="form-group"  action="func.php" method="post" >
											 
													<label>First Name:</label>
													<input type="text" name="fname" class="form-control"><br>
													<label>Last Name:</label>
													<input type="text" name="lname" class="form-control"><br>
													<label>E-mail:</label>
													<input type="text" name="email" class="form-control"><br>
													<label>Contact:</label>
													<input type="text" name="contact" class="form-control"><br>
													<label>Doctor Appointment:</label>
													<select class="form-control" name="docapp">
														<option value="Dr Sharma From 6pm to 8pm">Dr Sharma From 6pm to 8pm</option>
														<option value="Dr Shetty From 6pm to 8pm">Dr Shetty From 6pm to 8pm</option>
														</select><br>
													<input type="submit" name="pat_submit" value="Enter Appointment" class="btn btn-primary">
											</form>

											</div>
										</div>
										<div class="col-md-1"/>

									</div>
								</div>
								</div>
								


								<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"/>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"/>
								<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"/>
								<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.6/dist/sweetalert2.all.min.js"></script>
								<script type="text/javascript">
								$(document).ready(function(){
								Swal.fire({
								  title: 'Welcome!',
								  text: 'Have a nice day.',
								  imageUrl: 'images/13.jpg',
								  imageWidth: 400,
								  imageHeight: 200,
								  imageAlt: 'Custom image',
								  animation: false
								})	
									
								});
								
								</script>
								
							</body>
						</html>
						