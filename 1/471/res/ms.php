<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('config.php'); ?>
<html>

<?php

if(isset($_POST['submit'])){
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value

foreach ($_POST['mask'] as $ms)
{
  //echo "You have selected :" .$ms; // Displaying Selected Value
}
}







       $result = mysql_query("Select options.options, 
COUNT(CASE WHEN test_records.remark='low' AND lifestyle_records.Q_ID=$ms AND lifestyle_records.PID=test_records.PID THEN 1 END) AS Low,
COUNT(CASE WHEN test_records.remark='lower marginal' AND lifestyle_records.Q_ID=$ms AND lifestyle_records.PID=test_records.PID THEN 1 END) AS Lower_Margin, 
COUNT(CASE WHEN test_records.remark='normal' AND lifestyle_records.Q_ID=$ms AND lifestyle_records.PID=test_records.PID THEN 1 END) AS normal,
COUNT(CASE WHEN test_records.remark='higher marginal' AND lifestyle_records.Q_ID=$ms AND lifestyle_records.PID=test_records.PID THEN 1 END) AS Higher_Marginal,
COUNT(CASE WHEN test_records.remark='high' AND lifestyle_records.Q_ID=$ms AND lifestyle_records.PID=test_records.PID THEN 1 END) AS High 
 from options
JOIN questions on
options.Q_ID=questions.Q_ID
JOIN lifestyle_records on
options.option_ID=lifestyle_records.option_ID
JOIN test_records on
lifestyle_records.PID=test_records.PID
WHERE test_records.test_ID=1 AND lifestyle_records.Q_ID= $ms
Group by lifestyle_records.option_ID, test_records.remark");

if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}

echo "<table border='1'>
<tr>
<th>options</th>
<th>low</th>
<th>lower_margin</th>
<th>normal</th>
<th>higher_margin</th>
<th>high</th>


</tr>";


     while ($row = mysql_fetch_array($result)) { 



echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "<td>" . $row[4] . "</td>";
echo "<td>" . $row[5] . "</td>";




echo "</tr>";
}
echo "</table>";

?>





</html>
