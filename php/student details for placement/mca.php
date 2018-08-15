<!DOCTYPE html>
<html lang="en" >
<?php session_start();
$emailid=$_SESSION['emailid'];
?>
<head>
  <meta charset="UTF-8">
  <title>MCA Marks</title>
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
            <h1>MCA Percentage</h1>
           <div class="divider"></div>
         </div>
           <form class="form-register" method="POST" name="register" novalidate action="mca.php">
           	 <div class="input-field col s6">
              <input name="semester1" type="text">
              <label for="semester1">Semester 1</label>
            </div>
		   <div class="input-field col s6">
              <input name="semester2" type="email" >
              <label for="semester2">Semester 2</label>
             </div>
			   <div class="input-field col s6">
              <input name="semester3" type="text" >
              <label for="semester3">Semester 3</label>
            </div> 
            <div class="input-field col s6">
              <input name="semester4" type="text">
              <label for="semester4">Semester 4</label>
            </div>
       <div class="input-field col s6">
              <input name="semester5" type="email" >
              <label for="semester5">Semester 5</label>
             </div>
         
			
              <div class="space-top text-center">
               <button type="submit value="Submit" name="save" class="waves-effect waves-light btn done">
               <i class="material-icons left">save</i> Save
               </button>
               <button ng-disabled="form-register.$invalid" type="button" class="waves-effect waves-light btn done" onclick="location.href='graduation.php'">
               <i class="material-icons left">next</i> Next
               </button>
               
              </div>
             </form>
             <?php
                
              if(isset($_POST["save"]))
              {
                $sem1=$_POST["semester1"];     
                $sem2=$_POST["semester2"];
                $sem3=$_POST["semester3"];
                $sem4=$_POST["semester4"];
                $sem5=$_POST["semester5"];
                
                $con=mysqli_connect("localhost","root","","aug2018");
                $str="insert into students_marks(email,semester1,semester2,semester3,semester4,semester5) values('$emailid','$sem1','$sem2','$sem3','$sem4','$sem5')";
               
                $result=mysqli_query($con,$str);
                if($result==1)
                echo "Successful";
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
