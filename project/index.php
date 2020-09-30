<?php
    function sayHello($name) {
        echo "Hello $name!";
    }
?>
<html><body><?php
    $number=42;
    sayHello('world' . $number);
    phpinfo(); 
?></body></html>
