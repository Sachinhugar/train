<html>
<body>
<?php

$str = "Hello World!";

echo $str . "<br>";

echo ltrim($str,"Hello");


$str = "Hello World!";

echo $str . "<br>";

echo rtrim($str, "World!");

//html entities
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';

echo htmlentities($str);
?></body>
</html>
