<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial_scale=1.0">
    <meta http>
    <title>Document</title>
</head>
<body>
 <form action="sms.php" method="post">
     <input type="text" name="number" placeholder="enter number">
      <input type="text" name="text" placeholder="enter message">
      <input type="submit" value="sens" name="submit">
 </form>   
</body>
</html>
<?php
if(isset($_POST['submit']))
    $number=$_post['number'?>