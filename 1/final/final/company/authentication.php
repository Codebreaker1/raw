<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<div class="content-wrapper" style="border-top: none; padding-left: 10px; width: 698px; padding-bottom: 82px;">
    <?php
    $filters = array
        (
        "username" => array
            (
            "filter" => FILTER_SANITIZE_STRING,
            "options" => array
                (
                "min_range" => 1,
            )
        ),
        "password" => array
            (
            "filter" => FILTER_SANITIZE_STRING,
            "options" => array
                (
                "min_range" => 1
            )
        ),
    );

    $inputs = filter_input_array(INPUT_POST, $filters);

    if (!$inputs["username"]) {
        echo('<div class="alert alert-error">Username is required.</div>');
    } elseif (!$inputs["password"]) {
        echo('<div class="alert alert-error">Password is required.</div>');
    } else {
        $username = $inputs['username'];
        $password = md5($inputs['password']);

        $query = "SELECT * FROM company WHERE Company_name='$username' AND password='$password'";
        $sql = mysql_query($query) or die(mysql_error());
        $count = mysql_num_rows($sql);
        if ($count > 0) {
            while ($row = mysql_fetch_array($sql)) {
                $uid = $row['cid'];
                $uname = $row['Company_Name'];
               // $userCatId = $row['user_cat_id'];
				$prev= $row['prev'];
				echo $prev;
            }
            session_start();
            $_SESSION['user'] = $uname; // user name
            $_SESSION['id'] = $uid; // user id
            $_SESSION['prev']=$prev;
            //echo $uid;
            //echo $uname;
            //$_SESSION['userCat'] = $userCatId; // user category (Super Admin /Normal User)
			//$_SESSION['ac_type']= $prev;
            ?>
            <div class="alert alert-success">
                <script type="text/javascript">
                    
					function Redirect()
                    {
						//var status = "<?php echo $prev?>";
						//alert(status);
                        
						window.location="navigation.php";	
                        //document.write("ASI");
						
							
                    }
					//var pp= <?php $prev; ?>;
					//document.write(echo $prev);
                       //x window.location="navigation.php";   

                    document.write("Authentication is successful, redirected to navigation page in 1 sec.");
                    setTimeout('Redirect()', 1000);
                </script>
            </div>
            <?php
        } else {
            echo '<div class="alert alert-error">Invalid usename /password</div>';
            echo '<a class="btn" href="login.php">Go Back</a>';
        }
    }

    
    ?>
</div>
<?php include('footer.php'); ?>

