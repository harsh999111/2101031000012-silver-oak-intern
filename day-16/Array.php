<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
 <?php
       $a = array(1,3,5,7,9,11);
       print_r($a);
       $sum = 0;
      foreach($a as $value){
        $sum = $sum +$value;
        echo ($sum)."<br>";
      }
    ?>
</body>
</html>