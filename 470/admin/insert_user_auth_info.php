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
                "max_range" => 10
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
        "repeatPassword" => array
            (
            "filter" => FILTER_SANITIZE_STRING,
            "options" => array
                (
                "min_range" => 1
            )
        ),
        "contactNum" => array
            (
            "filter" => FILTER_SANITIZE_STRING,
            "options" => array
                (
                "min_range" => 0,
                "max_range" => 12
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL,
        "area" => array
            (
            "filter" => FILTER_VALIDATE_INT
        ),
        "city" => array
            (
            "filter" => FILTER_VALIDATE_INT
        ),
    );

    $inputs = filter_input_array(INPUT_POST, $filters);

    if (!$inputs["username"]) {
        echo("<div class='alert alert-error'>Username is required and max. range is 10.</div>");
    } elseif (!$inputs["password"]) {
        echo("<div class='alert alert-error'>Password is required.</div>");
    }   elseif ($inputs["email"] == "") {
        echo("<div class='alert alert-error'>E-Mail is required.</div>");
    } elseif (!$inputs["email"]) {
        echo("<div class='alert alert-error'>Invalid E-Mail address.</div>");
    }else {

        $username = $inputs['username'];
        $password = md5($inputs['password']);
        $contactNumber = $_POST["contact"];
        $email = $inputs['email'];

		//$city = $_POST["qualify"];
		
        $ad="nuser";
		
	    
      
        
			
        $query = "INSERT INTO user_auth(username, password, contact_num, email,prev) VALUES('$username', '$password', '$email', '$contactNumber', '$ad')";
            
         
        //$area = $inputs['area'];

        // Check if user_auth table is empty. If empty, then make the first logged in user as SUPER ADMIN. Else make this user as a NORMAL USER (member).
      
            
            // End checking.
        
        $sql = mysql_query($query) or die(mysql_error());
      
                
            ?>
            <div class="alert alert-success">
                <script type="text/javascript">
                    function Redirect()
                    {
                        window.location="navigation.php";
                    }
                    document.write("Registration is successful, redirected to login page in 2 sec.");
                    setTimeout('Redirect()', 2000);
                </script>
            </div>
            <?php
        }
    

    if (!$inputs) {
        echo '<a class="btn" href="registration.php">Go Back</a>';
    }
    ?> 
</div>
<?php include('footer.php'); ?>

