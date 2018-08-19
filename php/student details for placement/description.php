<!DOCTYPE html>
<html lang="en" >
<?php
session_start();
$emailid=$_SESSION['emailid'];
?>
<head>
  <meta charset="UTF-8">
  <title>Discription</title>
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
            <h1>Project Description</h1>
           <div class="divider"></div>
         </div>
         <div class="input-field col s6">
              <input name="category" type="text">
              <label for="category">Project Category</label>
            </div>
           <form method="POST" action="description.php">
            <div class="input-field col s6">
              <input name="back" type="text">
              <label for="back">Back End</label>
            </div>
            <div class="input-field col s6">
              <input name="front" type="text">
              <label for="front">Front End</label>
            </div>
            <div class="input-field col s6">
              <input name="description" type="text">
              <label for="description">Project Description</label>
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
                $description=$_POST["description"];
                $front=$_POST["front"];
                $back=$_POST["back"];     
                
                
                $con=mysqli_connect("localhost","root","","aug2018");
                $str="insert into students_project(email,project_summary,back_end,front_end) values('$emailid','$description','$back','$front')";
               
                $result=mysqli_query($con,$str);
                if($result==1)
                {
                echo "Successful";
                header("Location: done.html");
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
