<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="styles/style.css"/>
  <title>Calculator</title>
</head>
<body>

 <?php
// Remove After testing

ini_set("display_errors","1");

ini_set("display_startup_errors","1");

error_reporting(E_ALL);

 $sum = 0;
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $sum = intval($num1) + intval($num2) + intval($num3);

  
  }
  ?>

  
  <form name="cal" method="POST"  onsubmit="(e)=>e.preventDefault()"> 
   <label>A JavaScript Calculator</label><br> 
   <label>First Number</label> 
   <input type="number" name="num1"><br> 
   <label>Second Number</label> 
   <input type="number" name="num2"><br> 
   <label>Three Number</label> 

   <input type="number" name="num3"><br> 
   
   <label>Result</label> 
   <input type="number"  value="<?php echo $sum; ?>">
    <br>
   <input type="submit" name="cal" value="Add"> 
    
  </form> 
  
</body>
</html>