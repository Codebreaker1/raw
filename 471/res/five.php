  <?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Pista.js Examples</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../jquery.pista.js" type="text/javascript" charset="utf-8"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>


<?php

if(isset($_POST['submit'])){
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value

foreach ($_POST['mask'] as $ms)
{
  //echo "You have selected :" .$ms; // Displaying Selected Value
}
}

$query = "SELECT tests.test_name, test_records.date, test_records.result, test_records.remark
From tests JOIN test_records on tests.test_ID=test_records.test_ID 
WHERE test_records.PID=PID AND test_records.test_ID=$ms
Order by test_records.date;"; 

 $sql = mysql_query($query) or die(mysql_error());


$i=0;
 while($row = mysql_fetch_array($sql) ){


$json[$i]=array('value'=>$row[2],'date'=>$row[1]);

//$one[$i]=$row[1];
//$two[$i]=$row[2];
$i++;

 }



?>


  <body>
  <div id="jquery-script-menu">

    <div class="content">
  <h3 id="ch">Diseases By Year</h3>

  <?php echo json_encode($json);


 ?>
    <div id="basic"></div>
    

    
    
    
    <script>

    $(document).ready(function(){
      var data= [   { name:"first",
          data:<?php echo json_encode($json);?>
          }
      ]

      // Basic
      options={
        height: 150,
        width: 600,
      }
      $("#basic").pista(data, options);
      
         });

  // Multiple lines

      
   
    </script>
<script type="text/javascript">

//alert("asi");

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </body>
</html>
