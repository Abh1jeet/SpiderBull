<?php

session_start();
if(isset($_SESSION['check']))
{

$name=$_SESSION['welcomeuser'];  

$userid=$_SESSION['userid'];

}
if(isset($_POST['checkload']))
{
  header("location:screen3.php");
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



<div class="container">
<div class="jumbotron" style="background-color: rgba(10, 10, 10, .9)">
 <table >
  <tr>
    <th>MF NAME</th>
    <th>NAV TODAY</th>
    <th>Units you want to buy</th>
  </tr>

<?php 
$k=1;
$y=11;
$i=10;
$s=1;
for(;$s<=$p;$s++)
{
	
		?>
  <tr>
    <td ><?php echo $divide[$i] ?></td>
    <td><?php echo $divide[$y] ?></td>
    <td class="unit">
    	<form role="form" method="POST" action="">
            <div class="form-group">
              <input type="hidden"  name="<?php echo $k; ?>" id="mfname" value="<?php echo $divide[$i];?>">
              <input type="hidden"  name="<?php echo $k+1; ?>" id="nav" value="<?php echo $divide[$y];?>">
              <input type="text" class="form-control" id="unit" placeholder="Enter units to buy" name="<?php echo $k+2; ?>">
               <input type="hidden" name="<?php echo $k+3?>" value="<?php echo $y; ?>" >
              
            </div>
             
           
        



    </td>
  </tr>
 <?php  
 $i=$i+7;
 $y=$y+7;
$k=$k+4;
  }?>
</table> 


</div>
 <input type="hidden" name="checkload" value="<?php echo $k;?>">
<button type="submit" name="submit" value="submit form" class="btn btn-success btn-lg" style="float:right;width: 400px"><span class="glyphicon glyphicon-off"></span>CONFIRM  BUY</button>
<div class="jumbotron" style="background-color: transparent;">
  
</div>
</div>
<nav class="navbar navbar-fixed-top" style="background-color: white;">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
       
        <span class="navbar-brand text-uppercase" ><span style="color:orange;">LOGGED IN as:</span><?php echo $name;?><span>
        </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav navbar-right text-uppercase">
          <li class="ink">
          <form method="POST" action="">
          <button type="submit" name="submit" value="submit form" class="btn btn-lg btn-danger">CLICK HERE TO CHECK OUT</button>
          </form>
          </li>
          
      </ul>
    </div> 
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>




          </form>
</body>
<?php
  require_once 'connection.php';




if(isset($_POST['submit'])||isset($_POST['submit']))
{
 $r=1;
 $nav=0.0;
 while($r<=$k)
 { 
  if(!empty($_POST[$r+2]))
  {  
    $mfname1=$_POST[$r];
    $mfname=str_replace("'","*",$mfname1);

      $nav=$_POST[$r+1];
      $unit=$_POST[$r+2];
     $location=$_POST[$r+3];
  echo $unit;    
               $query="INSERT INTO `userdashboard` (`USERID`,`MFNAME`, `NAV (buyingprice)`, `UNITSPURCHASED`) VALUES ('$userid','$mfname', '$nav', '$unit')";
               if(!mysqli_query($conn,$query))
                echo mysqli_error($conn);



                $query="INSERT INTO `getval` (`srno`, `userid`, `location`,`NAV`,`UNIT`) VALUES (NULL, '$userid', '$location', '$nav','$unit')";
               mysqli_query($conn,$query); 

              
  }
  $r+=4;
 }


}


?>




</html>