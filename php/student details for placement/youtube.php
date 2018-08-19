<!DOCTYPE html>
<html lang="en" >
<?php session_start();
$emailid=$_SESSION['emailid'];
?>
<head>
  <meta charset="UTF-8">
  <title>YouTube Details</title>
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
            <h1>YouTube Links</h1>
           <div class="divider"></div>
         </div>
           <form class="form-register" method="POST" name="register" novalidate action="youtube.php" enctype="multipart/form-data">
           	 <div class="input-field col s6">
              <input name="youtube1" type="text">
              <label for="youtube1">YouTube Link 1</label>
            </div>
            <div class="input-field col s6">
              <input name="photo1" type="file" class="validate" required>
              
            </div>
		   <div class="input-field col s6">
              <input name="youtube2" type="text" >
              <label for="youtube2">YouTube Link 2</label>
             </div>
             <div class="input-field col s6">
              <input name="photo2" type="file" class="validate" required>
              
            </div>
			   <div class="input-field col s6">
              <input name="youtube3" type="text" >
              <label for="youtube3">YouTube Link 3</label>
            </div> 
            <div class="input-field col s6">
              <input name="photo3" type="file" class="validate" required>
              
            </div>
            <div class="input-field col s6">
              <input name="youtubetitle" type="text" >
              <label for="youtubetitle">YouTube Title</label>
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

                $youtube1=$_POST["youtube1"]; 
                 ///For Photo Uploading
$timing=date("Y-m-d h:i:sa");
$target_dir = "youtube/";
$target_file = $target_dir . basename($_FILES["photo1"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file=str_replace(".".$imageFileType,"",$target_file);
$target_file=$target_file."_".$emailid;
$target_file=$target_file.".".$imageFileType;

move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_file);


                ////End for Photo Uploading    
                $youtube2=$_POST["youtube2"];
                 ///For Photo Uploading
$timing=date("Y-m-d h:i:sa");
$target_dir = "youtube/";
$target_file2 = $target_dir . basename($_FILES["photo2"]["name"]);
$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
$target_file2=str_replace(".".$imageFileType,"",$target_file2);
$target_file2=$target_file2."_".$emailid;
$target_file2=$target_file2.".".$imageFileType;

move_uploaded_file($_FILES["photo2"]["tmp_name"], $target_file2);


                ////End for Photo Uploading
                $youtube3=$_POST["youtube3"];
                 ///For Photo Uploading
$timing=date("Y-m-d h:i:sa");
$target_dir = "youtube/";
$target_file3 = $target_dir . basename($_FILES["photo3"]["name"]);
$imageFileType = pathinfo($target_file3,PATHINFO_EXTENSION);
$target_file3=str_replace(".".$imageFileType,"",$target_file3);
$target_file3=$target_file3."_".$emailid;
$target_file3=$target_file3.".".$imageFileType;

move_uploaded_file($_FILES["photo3"]["tmp_name"], $target_file3);


                ////End for Photo Uploading
                $youtubetitle=$_POST['youtubetitle'];

               


                $con=mysqli_connect("localhost","root","","aug2018");
                $str="insert into students_youtube(email,youtube1,youtube2,youtube3,youtube_title,thumbnail,thumbnail2,thumbnail3) values('$emailid','$youtube1','$youtube2','$youtube3','$youtubetitle','$target_file','$target_file2','$target_file3')";
               
                $result=mysqli_query($con,$str);
                if($result==1)
                {
                echo "Successful";
                header("Location: mca.php");
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
