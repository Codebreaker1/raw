<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<html>




<?php 


if(isset($_POST['submit'])){
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value

foreach ($_POST['mask'] as $ms)
{
  //echo "You have selected :" .$ms; // Displaying Selected Value
}
}
 $query = "Select disease.disease, COUNT(disease) from
disease JOIN test_records on
disease.test_ID=test_records.test_ID AND disease.remarks=test_records.remark
JOIN lifestyle_records on
test_records.PID=lifestyle_records.PID
WHERE lifestyle_records.option_ID=$ms
GROUP BY disease;"; 





        $sql = mysql_query($query) or die(mysql_error());

        $items = array();
        $it=array();
        $i=0;
         $j=0;

        while($row = mysql_fetch_array($sql) ){

        $items[$i]=$row[0];
        $it[$i++]=$row[1];	

        }






?>




<head>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: ""
		},
		exportFileName: "Pie Chart",
		exportEnabled: true,
                animationEnabled: true,
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{legendText}: <strong>{y}%</strong>",
			indexLabel: "{label} {y}%",
<?php
	$queryforsum="Select SUM(c) AS S FROM (Select disease.disease, COUNT(disease) AS c from
disease JOIN test_records on
disease.test_ID=test_records.test_ID AND disease.remarks=test_records.remark
JOIN lifestyle_records on
test_records.PID=lifestyle_records.PID
WHERE lifestyle_records.option_ID=$ms
GROUP BY disease) TableAlias";
	$ans= mysql_query($queryforsum) or die(mysql_error());
       $sum=0;
while ($row = mysql_fetch_assoc($ans)){
    $sum += $row['S'];
} 
$sum=100/$sum;
$sum = number_format($sum, 2);
?>




			dataPoints: [
				{  y: <?php echo $it[$j]*$sum; ?>, legendText: "<?php echo $items[$j]; ?>", exploded: true, label: "<?php echo $items[$j++] ?>" },
				{  y: <?php echo $it[$j]*$sum; ?>, legendText: "<?php echo $items[$j]; ?>", label: "<?php echo $items[$j++] ?>" },
				{  y: <?php echo $it[$j]*$sum; ?>, legendText: "<?php echo $items[$j] ?>", label: "<?php echo $items[$j++] ?>" },
				{  y: <?php echo $it[$j]*$sum; ?>, legendText: "<?php echo $items[$j] ?>", label: "<?php echo $items[$j++] ?>"},
			//	{  y: 0, legendText: "<?php echo $items[$j] ?>", label: "<?php echo $items[$j++] ?>" },
			//	{  y: 0, legendText: "<?php echo $items[$j] ?>", label: "<?php echo $items[$j++] ?>"}
			]
	}
	]
	});
	chart.render();
}
</script>
<script type="text/javascript" src="canvasjs.min.js"></script>
</head>
<body>
<div id="chartContainer" style="height: 600px; width: 100%;"></div>
</body>

</html>