<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<html>
	<head>
		<title>Test reports</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="styles/main.css"/>
	</head>
	<body>


		<?php
   $query = "SELECT Q_ID,Question FROM questions"; 





        $sql = mysql_query($query) or die(mysql_error());



?>
		<!-- css bar graph -->

		<div class="css_bar_graph">


			
			<!-- y_axis labels -->
<form action="index.php" method="post">
<select name="Color[]" id="fir" multiple> // Initializing Name With An Array
<option value="anemia">anemia</option>
<option value="diabetes">diabetes</option>
<option value="hypertension">hypertension</option>
<option value="infection">infection</option>
</select>

<select name="mask[]" id="asi_pore" multiple> // Initializing Name With An Array


	<?php 


 while($row = mysql_fetch_array($sql) ){		

 echo '<option value='.$row[0].'>'.$row[1].'</option>';
  
 // echo $row[0];

        }


	 ?>


</select>
<input type="submit" name="submit" id="but" value="Get Selected Values" />
</form>


			
		</div>
	</body>
</html>