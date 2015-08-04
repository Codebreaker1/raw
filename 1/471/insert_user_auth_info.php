<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<div class="content-wrapper" style="border-top: none; padding-left: 10px; width: 698px; padding-bottom: 82px;">
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

    <?php
    
//echo $userID;
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
 $query = "SELECT MAX(PID) as max FROM lifestyle_records"; 
 $sql = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array( $sql );
$newpid=$row['max'];
$newpid=$newpid+1;
//echo $newpid;
$date=date("Y/m/d");
  //  echo $_POST['submit'];

foreach ($_POST['mask'] as $select)
{
//echo "You have selected :" .$select; // Displaying Selected Value
//echo "</br>";
}
if($select)
{

$query = "INSERT INTO lifestyle_records(PID, Date, UID, Factor_ID,Q_ID,Option_ID) VALUES('$newpid', '$date', '$userID', 1, 1,'$select')";
$sql = mysql_query($query) or die(mysql_error());

 // echo "nai";
}


foreach ($_POST['mask1'] as $select1)
{
echo "You have selected :" .$select1; // Displaying Selected Value
//echo "</br>";
}


if($select1)
{

$query = "INSERT INTO lifestyle_records(PID, Date, UID, Factor_ID,Q_ID,Option_ID) VALUES('$newpid', '$date', '$userID', 1, 2,'$select1')";
$sql = mysql_query($query) or die(mysql_error());

}
foreach ($_POST['mask2'] as $select2)
{
echo "You have selected :" .$select2; // Displaying Selected Value
//echo "</br>";
}


if($select2)
{

$query = "INSERT INTO lifestyle_records(PID, Date, UID, Factor_ID,Q_ID,Option_ID) VALUES('$newpid', '$date', '$userID', 1, 3,'$select2')";
$sql = mysql_query($query) or die(mysql_error());


}
foreach ($_POST['mask3'] as $select3)
{
echo "You have selected :" .$select3; // Displaying Selected Value
//echo "</br>";
}

if($select3)

{
$query = "INSERT INTO lifestyle_records(PID, Date, UID, Factor_ID,Q_ID,Option_ID) VALUES('$newpid', '$date', '$userID', 2, 4,'$select3')";
$sql = mysql_query($query) or die(mysql_error());


}
foreach ($_POST['mask4'] as $select4)
{
echo "You have selected :" .$select4; // Displaying Selected Value
//echo "</br>";
}

if($select4)
{

  $query = "INSERT INTO lifestyle_records(PID, Date, UID, Factor_ID,Q_ID,Option_ID) VALUES('$newpid', '$date', '$userID', 3, 5,'$select4')";
$sql = mysql_query($query) or die(mysql_error());
}

foreach ($_POST['mask5'] as $select5)
{
echo "You have selected :" .$select5; // Displaying Selected Value
//echo "</br>";
}

if($select5)
{
  $query = "INSERT INTO lifestyle_records(PID, Date, UID, Factor_ID,Q_ID,Option_ID) VALUES('$newpid', '$date', '$userID', 3, 6,'$select5')";
$sql = mysql_query($query) or die(mysql_error());
}


     //   $query = "SELECT * FROM question"; 
       // $sql = mysql_query($query) or die(mysql_error());
       
     //   while($row = mysql_fetch_array($sql) ){
 

//echo "asi";

     //   $asi =$row['Q_id'];
        // echo $asi;

      //   echo $_POST[$asi];

          
		//$city = $_POST["qualify"];
		
        //
		
	    
      
        
			
       // $query = "INSERT INTO user_auth(username, password, contact_num, email,prev) VALUES('$username', '$password', '$email', '$contactNumber', '$ad')";
           // $query = "INSERT INTO patient(age, blood, weight, food,location,exercise,gender) VALUES('$username', '$password','$asi', '$contactNumber', '$email','$ex', '$ad')"; 
         
        //$area = $inputs['area'];

        // Check if user_auth table is empty. If empty, then make the first logged in user as SUPER ADMIN. Else make this user as a NORMAL USER (member).
      
            
            // End checking.
        
        //$sql = mysql_query($query) or die(mysql_error());
      
                
            ?>
            <div class="alert alert-success">
                <script type="text/javascript">
                    function Redirect()
                    {
                       window.location="registration.php";
                    }
                   document.write("Insertion successful, redirected to login page in 2 sec.");
                    setTimeout('Redirect()', 2000);
                </script>
            </div>
          
</div>
<?php include('footer.php'); ?>
