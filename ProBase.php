<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 25.10.2016
 * Time: 13:35
 */

require_once 'Base.php';

class ProBase extends Base {
    /*function show() {
        echo "ProBase";
    }*/

    public $b;

    public function __construct ($b){
        $this -> b = $b;
    }
};
?>