<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>

<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['user'])) {
    header('location:logout.php');
}
$userID = $_SESSION['id'];
$username = $_SESSION['user'];

//echo $username;

?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<head>
<link rel="stylesheet" type="text/css" href="a.css">
</head>




 <div class="testbox">
  <h1>Questions</h1>

    <form name="regiForm" class="form-horizontal" method="post" action="insert_user_auth_info.php">
      <hr>


<?php

$query = "SELECT * FROM  questions"; 
        $sql = mysql_query($query) or die(mysql_error());
$item=array();
$i=0;
 while($row = mysql_fetch_array($sql) ){

$item[$i]=$row[2];
$i++;

//echo '<h3 id='.$row[0].'>'.$row[2].'</h3>'; 
 }    
$j=0;
?>
<h6 id="pro1">
<?php echo $item[$j++]; ?>
</h6>



      <?php
$query = "SELECT * FROM  `options` WHERE factor_id =1 AND Q_id=1 "; 
        $sql = mysql_query($query) or die(mysql_error());

    

        ?>

    <select name="mask[]" id="asi1" multiple>

      <?php 

 while($row = mysql_fetch_array($sql) ){    

 echo '<option value='.$row[0].'>'.$row[3].'</option>';
  
 // echo $row[0];

 }

      ?>
</select>


<h6 id="pro1">
<?php echo $item[$j++]; ?>
</h6>


      <?php

$query = "SELECT * FROM  `options` WHERE factor_id =1 AND Q_id=2 "; 
        $sql = mysql_query($query) or die(mysql_error());

    

        ?>

    <select name="mask1[]" id="asi2" multiple>

      <?php 

 while($row = mysql_fetch_array($sql) ){    

 echo '<option value='.$row[0].'>'.$row[3].'</option>';
  
 // echo $row[0];

 }

      ?>
</select>




<h6 id="pro1">
<?php echo $item[$j++]; ?>
</h6>




      <?php

//$query = "SELECT * FROM  `options` WHERE factor_id =3 AND Q_id=5 "; 
$query = "SELECT * FROM  `options` WHERE factor_id =1 AND Q_id=3 "; 
        $sql = mysql_query($query) or die(mysql_error());

    

        ?>

    <select name="mask2[]" id="asi_pore" multiple>

      <?php 

 while($row = mysql_fetch_array($sql) ){    

 echo '<option value='.$row[0].'>'.$row[3].'</option>';
  
 // echo $row[0];

 }

      ?>
</select>

<div id="master">

<h6 >
<?php echo $item[$j++]; ?>
</h6>

</div>



      <?php

$query = "SELECT * FROM  `options` WHERE factor_id =2 AND Q_id=4"; 
        $sql = mysql_query($query) or die(mysql_error());

    

        ?>

    <select name="mask3[]" id="asi_pore" multiple>

      <?php 

 while($row = mysql_fetch_array($sql) ){    

 echo '<option value='.$row[0].'>'.$row[3].'</option>';
  
 // echo $row[0];

 }

      ?>
</select>
<div id="master1">
<h6>
<?php echo $item[$j++]; ?>
</h6>
</div>

      <?php

//$query = "SELECT * FROM  `options` WHERE factor_id =1 AND Q_id=1 "; 
      $query = "SELECT * FROM  `options` WHERE factor_id =3 AND Q_id=5 "; 
        $sql = mysql_query($query) or die(mysql_error());

    

        ?>

    <select name="mask4[]" id="asi_pore" multiple>

      <?php 

 while($row = mysql_fetch_array($sql) ){    

 echo '<option value='.$row[0].'>'.$row[3].'</option>';
  
 // echo $row[0];

 }

      ?>
</select>
<h6 id="pro1">
<?php echo $item[$j++]; ?>
</h6>



       <?php

//$query = "SELECT * FROM  `options` WHERE factor_id =1 AND Q_id=2"; 
$query = "SELECT * FROM  `options` WHERE factor_id =3 AND Q_id=6 "; 

        $sql = mysql_query($query) or die(mysql_error());

    

        ?>

       <select name="mask5[]" id="asi_pore" multiple>

      <?php 

 while($row = mysql_fetch_array($sql) ){    

 echo '<option value='.$row[0].'>'.$row[3].'</option>';
  
 // echo $row[0];

 }

      ?>
   </select>



<button type="submit" class="button">Register</button>
 
</form>
</div>




<?php include('footer.php'); ?>