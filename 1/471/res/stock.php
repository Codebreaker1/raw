<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Possible Disease for a Particular Factor</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="styles/main.css"/>
	</head>
	<body>
		<!-- css bar graph -->


		<?php
   $query = "SELECT options,Option_ID FROM options"; 





        $sql = mysql_query($query) or die(mysql_error());




		?>

		<div class="css_bar_graph">

<h3>Choose a Lifestyle Factor</h3>
			
			<!-- y_axis labels -->
<form action="sto.php" method="post">

<select name="mask[]" id="asi_pore" multiple> // Initializing Name With An Array


	<?php 


 while($row = mysql_fetch_array($sql) ){		

 echo '<option value='.$row[1].'>'.$row[0].'</option>';
  
 // echo $row[0];

        }


	 ?>


</select>
<input type="submit" name="submit" id="but" value="View" />
</form>


			
		</div>
	</body>
</html>