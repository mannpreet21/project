

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="col-sm-3">
						<h3>Apply for a Teacher</h3>
						<form role="form" name="teacher-form" id="teacher-form" action="" method="post" enctype="multipart/form-data">
							<div class="form-group" id="teacher-email-group">
								<div class="input-group">
									<input type="email" name="email" class="form-control" id="teacher-input-email" placeholder="Email">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								</div>
							</div>
							<div class="form-group" id="teacher-phone-group">
								<div class="input-group">
									<input type="password" name="password" class="form-control" id="teacher-input-phone" >
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div>

									<div class="form-group" id="teacher-phone-group">
								<div class="input-group">
									<input type="name" name="name" class="form-control" id="teacher-input-phone" placeholder="name">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div> -->

									<!-- <div class="form-group" id="teacher-phone-group"> -->
								<!-- <div class="input-group">
									<input type="text" name="description" class="form-control" id="teacher-input-phone" placeholder="description">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div> -->

						<!-- <div class="form-group" id="teacher-phone-group">
								<div class="input-group">
									<input type="file" name="img" class="form-control" id="teacher-input-phone" placeholder="description">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div>
							</div> -->
							<!-- <input type="submit" name="submit"  value="Submit">		
								</form>
					</div>
</body>
</html> -->

<?php
 // include'config.php';
 
	 
	// if(isset($_POST['submit']))
	// {		
	
	// 	echo $email=$_POST['email'];
	// 	echo $password=$_POST['password'];
	// 	echo $name=$_POST['name'];
	// 	echo $description=$_POST['description'];
		

	// echo $name=$_FILES['img']['name'];
	//  echo $size=$_FILES['img']['size'];
	//  echo $tmp_name=$_FILES['img']['tmp_name'];
	//  echo $type=$_FILES['img']['type'];

	// $insert = "insert into admin values('','$email','$password','$name','')";	
	// mysqli_query($con, $insert);	
	// 	echo "values inserted";

	// 	if(!empty($name))
 // 	{
 //       $location='upload/';
 //       move_uploaded_file("$tmp_name", "$location". "$name");

 //       $path = $location.$name;

// $insert = "insert into admin values('','$email','$password','$name','$description')";
// 	mysqli_query($con, $insert);	
// 		echo "values inserted";
      
//       	}
//  	else
//  	{
//   echo "plz select foto";
// }
// 		echo $name;
//  				}
// }
?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<center>		<h1 style="background-color:#144d87; color:white; padding-top:20px; padding-bottom:25px; margin-top:-20px">ADD NEW TEACHER </h1></center>
	<style>
		html
		{
			background-color: #e8f3f8;
		}
		input
	{
		margin-top: 10px;
		margin-bottom: 5px;	padding:5px;
		font-size: inherit;
		background:#faf6d9;
		width:200px;
	}
		.col-sm-3
		{
			text-align: center;

		margin-top:20px;
		margin-left: 0;
		display: block;
		margin-bottom: 20px;
	
		
		}
		input[type="file"]
		{
		
			width: 200px;

		}
		input[type="submit"]
		{
			margin-left: 20px;
			width: 150px;
			border-radius: 5px;

		}
	</style>
<div class="col-sm-3">
					
						<form role="form" name="teacher-form" id="teacher-form" action="" method="post" enctype="multipart/form-data">
						
							<div class="form-group" id="teacher-email-group">
								<div class="input-group">
									<input type="email" name="email" class="form-control" id="teacher-input-email" placeholder="Email">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								</div>
							</div>


							<div class="form-group" id="teacher-phone-group">
								<div class="input-group">
									<input type="password" name="password" class="form-control" id="teacher-input-phone" placeholder="Password">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div>


									<div class="form-group" id="teacher-phone-group">
								<div class="input-group">
									<input type="text" name="name" class="form-control" id="teacher-input-phone" placeholder="name">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div>


									<div class="form-group" id="teacher-phone-group">
								<div class="input-group">
									<input type="text" name="description" class="form-control" id="teacher-input-phone" placeholder="description">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div>


						<div class="form-group" id="teacher-phone-group">
								<div class="input-group">
									<input type="file" name="img" class="form-control" id="teacher-input-phone">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div>
							</div>

							

						<input type="submit" name="submit"  value="Submit">		
								</form>
					</div>
</body>
</html>

<?php
 include'config.php';
 
	 
	if(isset($_POST['submit']))
	{		
		
		echo $email=$_POST['email'];
		echo $password=$_POST['password'];
		echo $name1=$_POST['name'];
		echo $description=$_POST['description'];
		

	echo $name=$_FILES['img']['name'];
	 echo $size=$_FILES['img']['size'];
	 echo $tmp_name=$_FILES['img']['tmp_name'];
	 echo $type=$_FILES['img']['type'];


		if(!empty($name))
 	{
       $location='upload/';
       move_uploaded_file("$tmp_name", "$location". "$name");

       $path = $location.$name;

$insert = "insert into admin values('','$email','$password','$name1','$description','$path')";	
	mysqli_query($con, $insert);	
		echo "values inserted";
      
      	}
 	else
 	{
  echo "please select photo";
}
		
 				}

?>














