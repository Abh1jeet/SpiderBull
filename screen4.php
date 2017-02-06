<?php
session_start();
if(!isset($_SESSION['check']))
{
header("location:index.php");
}
else{$name=$_SESSION['welcomeuser'];  

$userid=$_SESSION['userid'];
}

 
require_once 'connection.php';

if(isset($_POST['submit1']))
{  $query="DELETE FROM `userdashboard` WHERE `USERID`='$userid'";
   $query_run=mysqli_query($conn,$query);
   $query="DELETE FROM `getval` WHERE `userid`='$userid'";
   $query_run=mysqli_query($conn,$query);

  header("location:read.php");


}
 if(isset($_POST['submit']))
 {
   $query="DELETE FROM `userdashboard` WHERE `USERID`='$userid'";
   $query_run=mysqli_query($conn,$query);
   $query="DELETE FROM `getval` WHERE `userid`='$userid'";
   $query_run=mysqli_query($conn,$query);



  header("location:read.php");
 }




?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<style type="text/css">
table, td {
    border: 1px solid white;
    border-collapse: collapse;
}

th{background-color: white;color:black;border: 1px solid black;
    border-collapse: collapse;text-align: center;font-size: 20px;}
td{color: white;}
th,td{padding:5px;}
.unit{padding-top:20px;}
body{


  background: -webkit-linear-gradient( rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://xubuntu.org/wp-content/uploads/2016/04/b8f9/Mountainous_View_by_Sven_Scheuermeier-1600.jpg);
    background: linear-gradient( rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://xubuntu.org/wp-content/uploads/2016/04/b8f9/Mountainous_View_by_Sven_Scheuermeier-1600.jpg);
     
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;



   
   }




</style>

</head>



<body>



<div class="container">
<div class="jumbotron" style="background-color: transparent;">

    
 


</div>




</div>

<?php
$homepage = file_get_contents('http://portal.amfiindia.com/spages/NAV0.txt');
$divide=explode(";",$homepage);
$p= 200;


?>





<?php 



$sql1="SELECT `userid` FROM `logindetail`";
$result1=mysqli_query($conn,$sql1);

while($array1=mysqli_fetch_assoc($result1))
{$tii=0;$tfi=0;
 $userid=$array1['userid'];
$sql="SELECT * FROM `getval` WHERE `USERID` ='$userid' ";
$result=mysqli_query($conn,$sql);

while($array=mysqli_fetch_assoc($result))

 { 
$location= $array['location'];
$tii=$tii+$array['NAV']*$array['UNIT'];
$tfi=$tfi+$divide[$location]*$array['UNIT'];
          
 
  }
  $return=0;
if($tii!=0){
$return=($tfi-$tii)/$tii;
  $quer="UPDATE `logindetail` SET `currentRate` = '$return' WHERE `logindetail`.`userid` ='$userid' ";
  $result2=mysqli_query($conn,$quer);
  echo mysqli_error($conn);  

 
}

  
  }?>
 

<div class="container">
<div class="jumbotron" style="background-color: rgba(10, 10, 10, .9)">
<h1 style="margin-left:28%;color:white;" >WINNER'S LIST</h1>
 <table style="margin-left:30%;" >
  <tr  >
    <th style="width:20%;" >RANK</th>
    <th style="width:45%;">NAME</th>
    <th style="width:20%;">RATE</th>
  </tr>
  <?php 
$query="SELECT * FROM `logindetail` ORDER BY `currentRate` DESC  ";
$query_run=mysqli_query($conn,$query);
$i=1;
while($query_result=mysqli_fetch_assoc($query_run))
{ if($i<=3){
  ?>


<tr >
  
  <td><?php echo $i;?></td>
  <td><?php echo $query_result['name']; ?></td>
  <td><?php echo $query_result['currentRate']." %"; ?> </td>
</tr>

<?php $i++;}}

?>

</table>




</div>
<form action="" method="POST">
<button type="submit" name="submit" value="submit form" class="btn btn-success btn-lg" style="float:right;width: 400px"><span class="glyphicon glyphicon-off"></span>PLAY AGAIN</button>
</form>
<div class="jumbotron" style="background-color: transparent;">
  
</div>
</div>
<nav class="navbar navbar-fixed-top" style="background-color: white;">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
       
        <span class="navbar-brand text-uppercase" ><span style="color:orange;">LOGGED IN as:</span><?php echo $name;?></span>
        </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav navbar-right text-uppercase">
          <li class="ink">
          <form method="POST" action="">
          <button type="submit" name="submit1" value="submit form" class="btn btn-lg btn-danger">GO BACK AND PLAY AGAIN</button>
          </form>
          </li>
          
      </ul>
    </div> 
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>




          
</body>




</html>