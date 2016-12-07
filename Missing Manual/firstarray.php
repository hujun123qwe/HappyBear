<?php
/*
array{ 
    [85]=> array{ ["shenyu"]=> int(2) ["num"]=> int(2) ["money"]=> int(1) } 
    [208]=> array{ ["shenyu"]=> int(141) ["num"]=> int(1) ["money"]=> int(1) } 
    ["MoenyCount"]=> int(3) }
    */
$some = array(85=>array(shenyu=>2,num=>2),208=>array(shenyu=>2,num=>1));
echo var_dump($some);
echo "<br>",var_dump(end($some));
//$some = current($some);
//$some = $some[208];
//echo "<br>",var_dump($some);
$any[208] = $some[208];
//echo "<br>",var_dump($any);
//$some = $any;
//echo "<br>",var_dump($some);
foreach($some as $key=>$val){
    if($key == 85){
        unset($some[$key]);
    }
}
//echo "<br>",var_dump($some);

?>