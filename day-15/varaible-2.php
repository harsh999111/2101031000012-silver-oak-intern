<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php 
$a = "123 abc";
echo "type of a is:".gettype($a)."<br>";
settype($a,"int");


echo "after conversion type of a is:".gettype($a);    ?>

</body>
</html>