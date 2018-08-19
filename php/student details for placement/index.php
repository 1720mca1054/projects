<!DOCTYPE html>
<html lang="en" >
<?php session_start();?>
<head>
  <meta charset="UTF-8">
  <title>Student Form</title>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <body ng-controller="RegisterCtrl" ng-app="myApp">
 <div class="container">
   <div id="signup">
      <div class="signup-screen">
         <div class="space-bot text-center">
            <h1>Basic Info</h1>
           <div class="divider"></div>
         </div>
           <form class="form-register" method="POST" name="register" novalidate action="index.php" enctype="multipart/form-data">
           	 <div class="input-field col s6">
              <input id="name" name="name" type="text" class="validate" required>
              <label for="name">Name</label>
            </div>
		   <div class="input-field col s6">
              <input id="email" name="email" type="email"  ng-model="email" class="validate" required>
              <label for="email">Email</label>
             </div>
             <p class="alert alert-danger" ng-show="form-register.email.$error.email">Your email is invalid.</p>
			   <div class="input-field col s6">
              <input id="year" name="year" type="text" class="validate" required>
              <label for="first-name">Passing Year</label>
            </div> 

               <div class="input-field col s6">
              <input name="photo" type="file" class="validate" required>
              
            </div> 
			
			
              <div class="space-top text-center">
               <button type="submit value="Submit" name="save" class="waves-effect waves-light btn done">
               <i class="material-icons left">save</i> Save
               </button>
              
               
              </div>
             </form>


             <?php
						    
							if(isset($_POST["save"]))
							{

								$name=$_POST["name"];			
								$email=$_POST["email"];
								$year=$_POST["year"];

								///For Photo Uploading
$timing=date("Y-m-d h:i:sa");
$target_dir = "photos/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file=str_replace(".".$imageFileType,"",$target_file);
$target_file=$target_file."_".$email;
$target_file=$target_file.".".$imageFileType;

move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);


								////End for Photo Uploading


								$con=mysqli_connect("localhost","root","","aug2018");
								$str="insert into students(name,email,passing_year,photo) values('$name','$email','$year','$target_file')";
								$result=mysqli_query($con,$str);
								if($result==1)
								{
								echo "Successful";
								$_SESSION['emailid']=$email;
                header("Location: links.php");
								


							}
								else
								echo "Failed";
							}
														
							?>	


           </div>
        </div>
    </div>
</body>
  <script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
