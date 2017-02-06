<!DOCTYPE html>
<html>
<head>
  <title>SIGN IN </title>
  <link rel="icon" type="image/jpg" href="/images/mq1.jpg" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<style type="text/css">

body{


  background: -webkit-linear-gradient( rgba(255, 255, 255, .1), rgba(255, 255, 255, .1)), url(https://xubuntu.org/wp-content/uploads/2016/04/b8f9/Mountainous_View_by_Sven_Scheuermeier-1600.jpg);
    background: linear-gradient( rgba(255, 255, 255, .1), rgba(255, 255, 255, .1)), url(https://xubuntu.org/wp-content/uploads/2016/04/b8f9/Mountainous_View_by_Sven_Scheuermeier-1600.jpg);
     
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;



   
   }



</style>



</head>


<body>

<?php

session_start();

 require_once 'connection.php';





if(isset($_POST['logname'])&&isset($_POST['logpass']))
{$logname=$_POST['logname'];
$logpass=$_POST['logpass'];

  if(!empty($_POST['logname'])&&!empty($_POST['logpass']))
  {
  $queryl="SELECT * FROM `logindetail` WHERE `name` = '$logname' AND `pan` = '$logpass' ";
  $queryl_run=mysqli_query($conn,$queryl);
  $queryl_array=mysqli_fetch_assoc($queryl_run);

  if(@mysqli_num_rows($queryl_run)==1)
    { 



    $_SESSION['check']='login';
    $_SESSION['welcomeuser']=$logname;
   
    $_SESSION['userid']=$queryl_array['userid'];
    header("location:read.php");

  }
  else
  {echo '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-

label="close">&times;</a>
    <strong>LOGIN ERROR!</strong><br>enter a valid  username and password or you can create a new account
  </div>';} 
  }
  
}



if(isset($_POST['name'])&&isset($_POST['dob'])&&isset($_POST['pan']))
  {
$name=$_POST['name'];
$dob=$_POST['dob'];
$pan=$_POST['pan'];
$currentRate = 0.0;

$query="SELECT * FROM `logindetail` WHERE `name` = '$name' ";
 $query_run=@mysqli_query($conn,$query);
 if(@mysqli_num_rows($query_run)==1)
  {echo '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-

label="close">&times;</a>
    <strong>SIGNIN ERROR!</strong><br>user name already exist
  </div>';}


else {
$queryi="INSERT INTO `logindetail` (`userid`, `name`, `dob`, `pan`,`currentRate`) VALUES (NULL, '".$name."', '".$dob."', '".$pan."' ,'".$currentRate."')";
mysqli_query($conn,$queryi);


$queryi="SELECT * FROM `logindetail` WHERE `name` = '$name' AND `pan` = '$pan' ";
  $queryi_run=mysqli_query($conn,$queryi);

 $queryi_array=mysqli_fetch_assoc($queryi_run);
if($queryi_run)
{

 $_SESSION['check']='login';
    $_SESSION['welcomeuser']=$name;
    $_SESSION['userid']=$queryi_array['userid'];
    header("location:read.php");

}


}

}









?>



 

<div class="container">
  <h2 style="text-align: center;color: gray;font-size: 10vh;">SPIDER<span style="color:black;">BULL</span></h2>
  
<div class="jumbotron" style="background-color:rgba(10,10,0,.8);width: 80%;margin-left:15%;">
  <ul class="nav nav-tabs" style=" font-size: 40px;text-align: center;margin-left: 20%">
    <li   class="active" ><a data-toggle="tab" href="#SIGNIN" style="font-size:22px;width:100%;color:orange;border-radius: 30% 30% 0% 0%;width:200px;"> <i class="fa fa-pencil" aria-hidden="true" style="margin-right: 5% "></i>Sign Up
</a></li>
    <li ><a data-toggle="tab" href="#LOGIN" style="font-size:22px;width:100%;color:orange;border-radius: 30% 30% 0% 0%;text-align: center;width: 200px"> <i class="fa fa-sign-in" aria-hidden="true" style="margin-right: 5% margin-top:3%;"></i> LOGIN</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="SIGNIN" class="tab-pane fade in active" style="color:white;">
    

 <form role="form" method="POST" action="">
            <div class="form-group">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter name" name="name" required>
            </div>
              <div class="form-group">
              <label for="dob" class="modcnt"><span class="glyphicon glyphicon-user"></span> DATE OF BIRTH</label><br>
              <input type="date" id="datepicker" class="selector" class="form-control"  name="dob" placeholder="dd/mm/yyyy"  required style="width:100%;color:black;">
            </div>
              

            <div class="form-group">
              <label for="pan" class="modcnt"><span class="glyphicon glyphicon-eye-open" ></span> PAN</label>
              <input type="pan" class="form-control" id="pan" placeholder="PAN" name="pan" required>
            </div>
            

              <button type="submit" name="submit" value="submit form" class="btn btn-lg btn-danger btn-block"><span class="glyphicon glyphicon-off"></span> SIGN UP</button>
          </form>









    </div>
    <div id="LOGIN" class="tab-pane fade" style="color:white;">
     <form role="form" method="POST" action="">
            <div class="form-group">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span> Name</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter registerd name" name="logname" required>
            </div>
            <div class="form-group">
              <label for="psw" class="modcnt"><span class="glyphicon glyphicon-eye-open" ></span> Pan</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter pan" name="logpass" required>
            </div>
              <button type="submit" class="btn btn-lg btn-danger btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
    </div>
    
  </div>
</div>
</div>


<script>
$( "#datepicker" ).datepicker();

$( ".selector" ).datepicker({
  changeYear: true
});

$( ".selector" ).datepicker({
  yearRange: "1960:2050"
});

// Getter
var changeYear = $( ".selector" ).datepicker( "option", "changeYear" );
 
// Setter
$( ".selector" ).datepicker( "option", "changeYear", true );


// Getter
var yearRange = $( ".selector" ).datepicker( "option", "yearRange" );
 
// Setter
$( ".selector" ).datepicker( "option", "yearRange", "1960:2050" );

</script>

</body>


</html>












