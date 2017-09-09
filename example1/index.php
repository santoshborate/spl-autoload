<?php
// Autoload all classes available at root dir
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj1  = new ClassA();
$obj2 = new ClassB();

echo $obj1->getData();
echo '<br>';
echo $obj2->getData();
?>