<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>

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

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<head>
<link rel="stylesheet" type="text/css" href="a.css">
</head>


 <div class="testbox">
  <h1>Registration</h1>

    <form name="regiForm" class="form-horizontal" method="POST" onsubmit="return validateForm()" action="insert_user_auth_info.php">
      <hr>

    <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="username" id="username" placeholder="Age" required/>

   <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="password" id="password" placeholder="Blood group" required/>

 <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="email" id="email" placeholder="weight" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="contact" id="contact" placeholder="Food Habit" required/>
   <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="location" id="location" placeholder="location" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="excercise" id="excercise" placeholder="excercise" required/>
    <label id="icon" for="name"><i class="icon-shield"></i></label>

    <select name="cars" id="gender">
  <option value="1">Male</option>
  <option value="2">female</option>
  </select>

 <button type="submit" class="button">Register</button>
</div>




<?php include('footer.php'); ?>