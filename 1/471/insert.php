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
    

      
		
    
     //$newpid=$newpid+1;

     $pid=$_POST['id'];
     $res1=$_POST['password'];
     $res2=$_POST['contact'];
     $res3=$_POST['branch'];
     $res4=$_POST['tai'];

     // $lw="low";
	    
      $date=date("Y/m/d");

        if($res1)
        {

            if($res1>=11 && $res1<19)
            {
                $lw="normal";
            }
            else if($res1>=9 &&$res1<11)
            {
                $lw="lower margin";
            }
            else if($res1<9)
            {
                $lw="low";
            }

 $query = "INSERT INTO test_records(PID, Date, UID, Test_ID,Result,remark) VALUES('$pid', '$date', '$userID', '1', '$res1','$lw')";
                         $sql = mysql_query($query) or die(mysql_error());

        //echo "asi";
        }
			if($res2)
        {

         if($res2>=5.5 && $res2<=6)
            {
                $lw="normal";
            }
            else if($res2>=6.1 &&$res2<=7.0)
            {
                $lw="higher margin";
            }
            else if($res2>7)
            {
                $lw="high";
            }





                    $query = "INSERT INTO test_records(PID, Date, UID, Test_ID,Result,remark) VALUES('$pid', '$date', '$userID', '2', '$res2','$lw')";
                         $sql = mysql_query($query) or die(mysql_error());

        //echo "asi";
        }
        if($res3)
        {

        if($res3>=100 && $res3<=200)
            {
                $lw="normal";
            }
            else if($res3>=201 &&$res3<=230)
            {
                $lw="higher margin";
            }
            else if($res3>230)
            {
                $lw="high";
            }






                    $query = "INSERT INTO test_records(PID, Date, UID, Test_ID,Result,remark) VALUES('$pid', '$date', '$userID', '3', '$res3','$lw')";
                         $sql = mysql_query($query) or die(mysql_error());

        //echo "asi";
        }
        if($res4)
        {
        if($res4>=0 && $res4<=20)
            {
                $lw="normal";
            }
            else if($res420 &&$res4<=50)
            {
                $lw="higher margin";
            }
            else if($res4>50)
            {
                $lw="high";
            }





                    $query = "INSERT INTO test_records(PID, Date, UID, Test_ID,Result,remark) VALUES('$pid', '$date', '$userID', '4', '$res4','$lw')";
                         $sql = mysql_query($query) or die(mysql_error());

        //echo "asi";
        }
       // $query = "INSERT INTO test_records(PID, Date, UID, Test_ID,Result,remark) VALUES('$newpid', '$date', '$userID', '$contactNumber', '$ad')";
            
         
        //$area = $inputs['area'];

        // Check if user_auth table is empty. If empty, then make the first logged in user as SUPER ADMIN. Else make this user as a NORMAL USER (member).
      
            
            // End checking.
        
       // $sql = mysql_query($query) or die(mysql_error());
      
                
            ?>
            <div class="alert alert-success">
                <script type="text/javascript">
                    function Redirect()
                    {
                        window.location="reg.php";
                    }
                    document.write("Registration is successful, redirected to login page in 2 sec.");
                    setTimeout('Redirect()', 2000);
                </script>
            </div>
       
    

  
</div>
<?php include('footer.php'); ?>

