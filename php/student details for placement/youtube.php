<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Simple Register Form with AngularJS & Material Design</title>
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
           <form >
           	 <div class="input-field col s6">
              <input id="youtube1" type="text">
              <label for="youtube1">YouTube Link 1</label>
            </div>
		   <div class="input-field col s6">
              <input id="youtube2" type="text" >
              <label for="youtube2">YouTube Link 2</label>
             </div>
			   <div class="input-field col s6">
              <input id="youtube3" type="text" >
              <label for="youtube3">YouTube Link 3</label>
            </div>  
			
              <div class="space-top text-center">
               <button ng-disabled="form-register.$invalid" class="waves-effect waves-light btn done">
               <i class="material-icons left">save</i> Save
               </button>
               <button ng-disabled="form-register.$invalid" class="waves-effect waves-light btn done" onclick="location.href='mca.php'">
               <i class="material-icons left">next</i> Next
               </button>
               
              </div>
             </form>
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
