<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('config.php'); ?>



<html>

<?php



$result = mysql_query("SELECT distinct lifestyle_factors.factor, questions.question, options.options, COUNT( lifestyle_records.option_id ) AS Num_of_people
FROM lifestyle_factors
JOIN questions ON lifestyle_factors.factor_ID = questions.factor_ID
JOIN options ON questions.Q_ID = options.Q_ID
JOIN lifestyle_records ON options.option_ID = lifestyle_records.option_ID
JOIN test_records ON lifestyle_records.PID = test_records.PID
JOIN tests ON test_records.test_ID = tests.test_ID
WHERE tests.test_ID =1
AND test_records.remark LIKE 'low'
GROUP BY lifestyle_records.option_ID
ORDER BY questions.Q_ID ASC,Num_of_people DESC");

if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}


echo "<table border='1'>
<tr>
<th>catagory</th>
<th>question</th>
<th>type</th>
<th>value</th>

</tr>";

//$row = mysql_fetch_row($result);



while ($row = mysql_fetch_array($result)) { 



echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[3] . "</td>";


echo "</tr>";
}
echo "</table>";




?>

</html>
