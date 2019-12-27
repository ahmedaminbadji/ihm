<?php 
require_once("../config/db.php");
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
   
  
</head>
<body>
   
        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Profile</a></li>
      <li ><a href="#">Reservation</a></li>
      <li ><a href="#">Historique de reservations</a></li>
      
    </ul>
  </div>
</nav>


<div class="container" style="margin-left:13%">
  
	<div class="col-lg-12 well">
	<div class="row">
	<div align='center'><h3>Profile</h3></div><br>
		<form  action action="" method="post"> 
			<div class="col-sm-12">
				<div class="row">
    				<div class="col-sm-6 form-group"> Name :
    					<input name="name" type="text" class="form-control" id="name" required placeholder="<?php echo $_SESSION['name']; ?>" title="Nom">
    				</div>
    				<div class="col-sm-6 form-group">Numero tel :
    					<input name="num" type="text" class="form-control" id="num" required  placeholder="<?php echo $_SESSION['number']; ?>"  title="Numero de telephone">
    				</div>
					<div class="col-sm-6 form-group">First Name :
    					<input name="prenom" type="text" class="form-control" id="prenom"  required placeholder="<?php echo $_SESSION['fname']; ?>" title="Prénom">
    				</div>
    				<div class="col-sm-6 form-group">Fidelity Points :    			
                        <input name="domA" type="text" class="form-control" id="domA"  readonly placeholder="<?php echo $_SESSION['points']; ?>" title="Domaine de travail">
    				</div>
					<div class="col-sm-6 form-group">E-mail :
    					<input name="email" type="text" class="form-control" id="email"  required placeholder="<?php echo $_SESSION['email']; ?>" title="Email">
    				</div>
    						
					<div class="col-sm-6 form-group">Password :
    					<input name="password" type="text" class="form-control" id="password"  required placeholder="Enter New Password" title="Mot de passe">
					</div>		
	             </div>
							
	<div align='center'>



  <!-- Boutton -->                                        
                                    <div class="col-md-offset-3 col-md-6" style=" margin-top:20px;">
                                        <button name="creer"   type="submit" class="btn btn-success btn-sm"></i>Edit Profile</button>
                                       
					
                                </div>					</div></div>
				</form> 
				</div>
	</div>
	</div>
	
	
	  
  
    </div>
</div>


</body>
</html>
