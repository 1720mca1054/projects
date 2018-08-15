<!DOCTYPE html>
<html lang="en" >
<?php session_start();
$emailid=$_SESSION['emailid'];
?>
<head>
  <meta charset="UTF-8">
  <title>Graduation 10th & 12th Marks</title>
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
            <h1>10th, 12th & Graduation Percentage</h1>
           <div class="divider"></div>
         </div>
           <form method="POST" action="graduation.php">
           	 <div class="input-field col s6">
              <input name="graduation" type="text">
              <label for="graduation">Graduation Cource</label>
            </div>
		   <div class="input-field col s6">
              <input name="graduation1" type="text" >
              <label for="graduation1">Graduation Percentage</label>
             </div>
			   <div class="input-field col s6">
              <input name="intermediate" type="text" >
              <label for="intermediate">12th Percentage</label>
            </div> 
            <div class="input-field col s6">
              <input name="highschool" type="text">
              <label for="highschool">10th Percentage</label>
            </div>
       
         
			
              <div class="space-top text-center">
                 <button type="submit value="Submit" name="save" class="waves-effect waves-light btn done">
               <i class="material-icons left">save</i> Save
               </button>
               <button ng-disabled="form-register.$invalid" type="button" class="waves-effect waves-light btn done" onclick="location.href='discription.php'">
               <i class="material-icons left">next</i> Next
               </button>
               
              </div>
             </form>

             <?php
                
              if(isset($_POST["save"]))
              {
                $graduation=$_POST["graduation"];     
                $graduation1=$_POST["graduation1"];
                $inter=$_POST["intermediate"];
                $high=$_POST["highschool"];
                $con=mysqli_connect("localhost","root","","aug2018");
                $str="update students_marks set graduation_cource='$graduation',graduation_per='$graduation1',12th_per='$inter',10th='$high' where email='$emailid'";
               
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
