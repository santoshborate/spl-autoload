<?php
// Autoload all classes available in library dir
spl_autoload_register(function ($class_name) {
    include '/library/'. $class_name . '.php';
});

$obj3  = new ClassC();
$obj4 = new ClassD();

echo $obj3->getData();
echo '<br>';
echo $obj4->getData();
?>