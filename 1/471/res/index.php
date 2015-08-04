<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>CSS3 Bar Graphs</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="styles/main.css"/>
	</head>
	<body>

<?php
if(isset($_POST['submit'])){
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
foreach ($_POST['Color'] as $select)
{
//echo "You have selected :" .$select; // Displaying Selected Value
}
foreach ($_POST['mask'] as $ms)
{
  //echo "You have selected :" .$ms; // Displaying Selected Value
}



//	echo "asi";


	   $query = "Select options.options, COUNT(options.option_ID) AS C from
options JOIN questions on 
options.Q_ID=questions.Q_ID
JOIN lifestyle_records on
options.option_ID=lifestyle_records.option_ID
JOIN test_records on
lifestyle_records.PID=test_records.PID
JOIN disease on
(test_records.test_ID=disease.test_ID AND test_records.remark=disease.remarks)
Where disease.disease= '$select' AND lifestyle_records.Q_ID=$ms GROUP BY options.option_ID"; 





        $sql = mysql_query($query) or die(mysql_error());
       
        //$sum=0;
        //while($row = mysql_fetch_array($sql) ){		

//$sum=$sum+$row["C"];


					
              //  echo '<li class="bar nr_1 blue" style="height:'.$fs.'px"><div class="top"></div><div class="bottom"></div><span>'.$row[1].'</span></li>';
               //echo '<li class="bar nr_1 green" style="height:'.$fs.'px"><div class="top"></div><div class="bottom"></div><span>'.$fs.'</span></li>';
              

 //} 
 



        // $asi =$row['Q_id'];
        // echo $asi;

         //echo $_POST[$asi];


?>

		<!-- css bar graph -->
		<div class="css_bar_graph">
			
			<!-- y_axis labels -->
			<ul class="y_axis">
				<!--<li>100%</li><li>80%</li><li>60%</li><li>40%</li><li>20%</li><li>0%</li>-->
			</ul>
			
			<!-- x_axis labels -->
			<ul class="x_axis">


<?php		
$items = array();
//$second = array();
$i=0;
$j=0;
$k=0;
while($row = mysql_fetch_array($sql) ){		

echo '<li>'.$row[0].'</li>';

$items[$i]=$row[1];
$second[$i]=$row[0];
$i++;

					
              //  echo '<li class="bar nr_1 blue" style="height:'.$fs.'px"><div class="top"></div><div class="bottom"></div><span>'.$row[1].'</span></li>';
               //echo '<li class="bar nr_1 green" style="height:'.$fs.'px"><div class="top"></div><div class="bottom"></div><span>'.$fs.'</span></li>';
              

 } 
 echo "</ul>";

 ?>
			</ul>
			
			<!-- graph -->
			<div class="graph">
				<!-- grid -->
				<ul class="grid">
					<li></li>
					<li><!-- 80 --></li>
					<li><!-- 60 --></li>
					<li><!-- 40 --></li>
					<li><!-- 20 --></li>
					<li><!-- 900 --></li>

					<li class="bottom"><!-- 0 --></li>
				</ul>
				
				<!-- bars -->
				<!-- 250px = 100% -->
<?php
				$queryforsum="SELECT SUM(C) AS S FROM (Select options.options, COUNT(options.option_ID) AS C  from options JOIN questions on 
options.Q_ID=questions.Q_ID
JOIN lifestyle_records on
options.option_ID=lifestyle_records.option_ID
JOIN test_records on
lifestyle_records.PID=test_records.PID
JOIN disease on
(test_records.test_ID=disease.test_ID AND test_records.remark=disease.remarks)
Where disease.disease= '$select' AND lifestyle_records.Q_ID=$ms
GROUP BY options.options
)  TableAlias 

";
$ans= mysql_query($queryforsum) or die(mysql_error());
       $sum=0;
while ($row = mysql_fetch_assoc($ans)){
    $sum += $row['S'];
} 
$sum=100/$sum;
$sum = number_format($sum, 2);
?>
		
				
					<ul>
					<li class="bar nr_1 blue" style="height: <?php  echo $items[$j++]*$sum; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $items[$k++]*$sum; ?></span></li>
					<li class="bar nr_2 green" style="height: <?php  echo $items[$j++]*$sum; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $items[$k++]*$sum; ?></span></li>
					<li class="bar nr_3 orange" style="height: <?php  echo $items[$j++]*$sum; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $items[$k++]*$sum; ?></span></li>
					<li class="bar nr_4 purple" style="height: <?php  echo $items[$j++]*$sum; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $items[$k++]*$sum; ?></span></li>
					<li class="bar nr_5 red" style="height: <?php  echo $items[$j++]*$sum; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $items[$k++]*$sum; ?></span></li>
					<li class="bar nr_6 blue" style="height: <?php  echo $items[$j++]*$sum; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $items[$k++]*$sum; ?></span></li>

 

				</ul>
				<?php //print_r($items);
			 }?> 	
			</div>
			
			<div class="label"><span>Graph: </span><?php echo $select; ?> affected people</div>
		
		</div>
	</body>
</html>