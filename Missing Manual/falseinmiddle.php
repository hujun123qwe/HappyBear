<?php
include_once 'returnfalse.php';
echo "<br>this is echo before false";


//直接写false程序不会终止.
//false;

//直接写函数也不行
// function check_false($some){
//     if($some=='test'){
//         return false;
//     }else{
//         return false;
//     }
// }
// check_false('test');


check_false('test');

echo "<br>this is echo after false .";

$some='';
if($some){
    echo "<br>some";
}

?>