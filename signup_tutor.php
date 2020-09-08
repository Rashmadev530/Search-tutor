<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="Style_for_project/bootstrap-4.5.0-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="Style_for_project/style_for_signup.css"/>
	</head>
	<body>
		<div class="container">
			<header class="container-fluid row">
				<div class="col-8">
					<ul class="nav justify-content-start">
					  <li class="nav-item">
					    
					    <a class="nav-link active" href="#"><i class="fas fa-home fa-1x"></i>Home</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Tutor Description</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Find Tution</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">About</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Contact us</a>
					  </li>
				    </ul>
				</div>
				<div class="col-4">
					<ul class="nav justify-content-end">
					  <li class="nav-item">
					    <a class="nav-link" href="#">Login</a>
					  </li>
					  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Register</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="signup_tutor.php">As a Tutor</a>
      <a class="dropdown-item" href="signup_student.php">As a Student</a>
     </div> 
  </li>
					  
				  </ul>
				</div>
			</header>
			<section class="container-fluid ">
			<h3 class="text-center">Sign up as a Tutor</h3>
			<form action="" method="post">
				<div class="form-group row">
			    <label class="col-sm-2 col-form-label">First Name </label>
			    <div class="col-sm-10">
			      <input type="text" 
			             name="fname"
			             class="form-control" 
			             placeholder="write here"
			             required=""
			             >
			    </div>
			    </div>
			    <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Last Name </label>
			    <div class="col-sm-10">
			      <input type="text" 
			             name="lname"
			             class="form-control" 
			             placeholder="write here"
			             required=""
			             >
			    </div>
			  </div>
			 
			 <div class="form-group row">
			 	<label class="col-sm-2 col-form-label">User Name </label>
			 	<div class="col-sm-10">
			      <input type="text" 
			             name="uname"
			             class="form-control" 
			             placeholder="write here"
			             required=""
			             >
			      <small class="form-text text-muted">
  User name must be contain letters and numbers, and must not contain spaces, special characters, or emoji.
</small>
			    </div>
			 </div>
			 
			 
			 
			    <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Date of Birth </label>
			    <div class="col-sm-10">
			      <input type="date" 
			             name="dob"
			             class="form-control" 
			             placeholder="write here"
			             required=""
			             >
			    </div>
			    </div>
			    <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Gender   </label>	
			    <div class="col-sm-10 row">
			    <div class="col-sm-1"></div>
			     <div class="form-check col-sm-2">
				  <input class="form-check-input" type="radio" name="gender"  value="male">
				  <label class="form-check-label" >
				   Male
				  </label>
				</div>
				<div class="form-check col-sm-2">
				  <input class="form-check-input" type="radio" name="gender"  value="female">
				  <label class="form-check-label" >
				   Female
				  </label>
				</div>
			    </div>
			    </div>
			    
			   <div class="form-group row">
			   	<label class="col-sm-2 col-form-label">Address</label>	
			    <div class="col-sm-10">
			     <div class="form-row">
				    <div class="col-7">
				      <input type="text" class="form-control" name="city" placeholder="City">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" name="state" placeholder="State">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" name="zip" placeholder="Zip">
				    </div>
				  </div>
			    </div>
			   </div> 
                    
			   <h4 class="text-center">Educational Description</h4>
			   <div class="form-group">
				    <label>Level of Study</label>
				    <input type="text" class="form-control"  name="level_study" placeholder="Intermediate/Honors/Master's...">
				   
              </div>
              
              <div class="form-group">
				    <label>Name of Institute</label>
				    <input type="text" class="form-control"  name="name_of_ins">
				   
              </div>
              <div class="form-group form-row">
			    <div class="col">
			      <input type="text" class="form-control" name="session" placeholder="Session">
			    </div>
			    <div class="col">
			      <input type="text" class="form-control" name="dept" placeholder="Department">
			    </div>
			    <div class="col">
			      <input type="text" class="form-control" name="semester" placeholder="Semester">
			    </div>
			  </div>
              
              <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" name="email" required="">
			    </div>
			  </div>
              
              <div class="form-group row">
			    <label  class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" name="pass" required="">
			      <small class="form-text text-muted">
  Your password must be 8-20 character, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</small>
			    </div>
			  </div>
  
              <div class="form-group row">
			    <label  class="col-sm-2 col-form-label">Confirm Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" name="pass" required="">
			      <small class="form-text text-muted">
  Your password must be 8-20 character, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</small>
			    </div>
			  </div>

              <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
			</form>
			</section>
			
			<footer class="container-fluid">
				<div class="footer">
					<p class="text-center"><i class="fas fa-copyright"></i>All Rights Reserved By The Tutor Search Media.</p>
				</div>
			</footer>
		</div>
		
		
		
		 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>