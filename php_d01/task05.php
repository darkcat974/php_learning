<?php
function exchanger (&$var1, &$var2): void
{
    $var3 = $var2;
    $var2 = $var1;
    $var1 = $var3;
}
?>