<?php

$regex = "/(Dr|Mr).Smith/";

echo "The regex is = ",$regex;

$strings = "Dr.Smith";

echo "<br>The strings is = ",$strings;

$string2 = "Mr.Smith";

echo "<br>The string2 is = ",$string2;

$res = preg_match($regex, $strings);

echo "<br><br>(preg_match({$regex}, {$strings}))";

echo "<br><br>The result is = ",var_dump($res);

$string_all = "Dr.Smith, Mr.Smith and they are child called Mricy";

//$p = print_r($string_all,true);

echo "<br><br>The match string is = ",$string_all;

$res_all = preg_match_all($regex, $string_all);

echo "<br><br>The result is = ",$res_all;

$regex_from_beginning = "/^(Dr|Mr).Smith/";

$regex_from_ending = "/(Dr|Mr).Smith$/";

$regex_ignore_toupper = "/(Dr|Mr).Smith/i";

$regex_ignore_black_include_zore = "/^ *(Dr|Mr).Smith/";

$regex_ignore_black_not_zore = "/^ +(Dr|Mr).Smith/";

$regex_ignore_all_beginning = "/^[ \t\r\n]*(Dr|Mr).Smith/";

$regex_simplify = "/^\s*(Mr|Dr).Smith/";

$get_message = isset($_POST["query"]) ? $_POST["query"] : "";

echo "<br>",$get_message;
?>