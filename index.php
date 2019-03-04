<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<style  type="test/css">

	#ab1:hover{cursor:pointer;}



</style>
<body style="background:url('images/cardback.jpeg') no-repeat; background-size:cover;">

<div class="container" style="width:400px; margin-top:100px;" >
<div class="card">
<img src="images/backgroundimg.jpeg" class="card-img-top">
<div class="card-body">

    <form class="form-group"  action="func.php" method="post" >
        <div class="col-md-4"><label>Username: </label></div>
        <div class="col-md-8"><input type="text" name="username" class="form-control"
                                     placeholder="enter username" required/></div><br>
        <div class="col-md-4"><label>Password: </label></div>
        <div class="col-md-8"><input type="password" class="form-control" name="password"
                                     placeholder="enter password" required/>
        </div><br>
		
		<input type="submit" class="btn btn-primary" id="ab1" name="login_submit"/>

        
		</div>	
	</div>		
</div>







    </form>

</div>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
