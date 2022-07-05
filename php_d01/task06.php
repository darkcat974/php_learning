<?php
function get_angry_dog(int $nb): string
{
    $str = "";

    for ($i = 0; $i < $nb; ++$i) {
        $str = $str . "woof";
    }
    $str = $str . "\n";
    return $str;
}
?>