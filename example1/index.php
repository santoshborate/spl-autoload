<?php
// Autoload all classes available at root dir
spl_autoload_register(function ($class_name) {
    // include $class_name . '.php';
    spl_autoload($class_name);
});

$obj1  = new ClassA();
$obj2 = new ClassB();

echo $obj1->getData();
echo '<br>';
echo $obj2->getData();
?>