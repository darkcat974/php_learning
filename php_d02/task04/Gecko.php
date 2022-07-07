<?php
class Gecko {
    public $name;
    public function __construct(...$var)
    {
        if (sizeof($var) > 0) {
            $this->name = $var[0];
            echo "Hello " . $this->name . ' !'.PHP_EOL;
        } else {
            echo "Hello !" . PHP_EOL;
        }
    }
    public function __destruct()
    {
        if ($this->name == NULL) {
            echo "Bye !" . PHP_EOL;
        } else {
            echo "Bye " .$this->name . " !". PHP_EOL;
        }
    }
}

$thomas = new Gecko("Thomas");
$pedro = new Gecko();

echo $thomas->name;
echo $pedro->name . "\n";
?>