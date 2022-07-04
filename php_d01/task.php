<?php
$int = 42;
$float = 42.42;
$str = "forty two";
$bool = true;
$null = NULL;
$var = "Hello World";
$my_array = array("to", 42, "Glory", 42.42, "Geckos");

echo "var = " . $var . "\n";
unset($var);

foreach ($my_array as $value) {
    echo $value . ' ';
}
?>