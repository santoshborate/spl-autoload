<?php
// Define constant
define('ROOT_DIR', './');
define('DS', '/');

/**
 * Auto load classes
 *
 * @param $className
 */
function loadClasses($className)
{
    if( file_exists(ROOT_DIR.DS.'controller/'.$className.'.php' ) ){
        set_include_path(ROOT_DIR.DS.'controller'.DS);
        spl_autoload($className);
    }
    elseif( file_exists('model/'.$className.'.php' ) ){
        set_include_path(ROOT_DIR.DS.'model'.DS);
        spl_autoload($className);
    }elseif( file_exists('view/'.$className.'.php' ) ){
        set_include_path(ROOT_DIR.DS.'view'.DS);
        spl_autoload($className    );
    } else {
        set_include_path(ROOT_DIR);
        spl_autoload($className);
    }
}

spl_autoload_register('loadClasses');

$obj1  = new ClassA();
$obj2 = new ClassB();
$obj3  = new ClassC();
$obj4 = new ClassD();
$obj5  = new ClassE();
$obj6 = new ClassF();

echo $obj1->getData();
echo '<br>';
echo $obj2->getData();

echo '<br>';
echo $obj3->getData();
echo '<br>';
echo $obj4->getData();

echo '<br>';
echo $obj5->getData();
echo '<br>';
echo $obj6->getData();
?>