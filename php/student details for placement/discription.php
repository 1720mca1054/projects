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
            <h1>Project Discription</h1>
           <div class="divider"></div>
         </div>
           <form method="POST" action="discription.php">
           	 <div class="input-field col s6">
              <textarea rows="4" cols="50" name="discription" type="text">
 
              </textarea>
            </div>
		   
         
			
              <div class="space-top text-center">
             <button type="submit value="Submit" name="save" class="waves-effect waves-light btn done">
               <i class="material-icons left">save</i> Save
               </button>
               <button ng-disabled="form-register.$invalid" class="waves-effect waves-light btn done" onclick="location.href='done.php'">
               <i class="material-icons left">next</i> Next
               </button>
               
              </div>
             </form>
             <?php
                
              if(isset($_POST["save"]))
              {
                $discription=$_POST["discription"];     
                
                
                $con=mysqli_connect("localhost","root","","aug2018");
                $str="insert into discription(email,discription) values('$emailid','$discription')";
               
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
