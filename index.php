<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 25.10.2016
 * Time: 13:40
 */

require_once 'ProBase.php';
/*$obj= new Base();
echo $obj -> show();
echo "</br>";
$obj= New ProBase ();
echo $obj -> show();*/
$objB= New Base (15);
echo $objB -> a;
echo "</br>";
$objP= New ProBase (5);
echo $objP -> b;
$tmp = $objB -> a;
$objB -> a = $objP -> b;
$objP -> b = $tmp;
echo "</br>";
echo $objB -> a;
echo "</br>";
echo $objP -> b;
?>