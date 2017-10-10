<?php
$arr = array("one","two","three");
foreach ($arr as $value)
{ 
    echo "Values:".$value."<br>";
}

function test()
{
    echo "John Hu";   
}
test();

echo "<br>";

function some($name)
{
    echo $name."Hu";
}
some("hujun");

echo "<br>";

function add($x, $y)
{
    return $x+$y;
}
echo add(3,5);

echo "<br>";

define("FOO", "testing");
echo defined("FOO");

echo "<br>";

$x = 73;
$y = 2;
function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
addition();
echo $z;

echo "<br>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SCRIPT_NAME']."<br>";
echo $_SERVER['HTTP_HOST']."<br>";
echo $_SERVER['HTTP_REFERER']."<br>";
echo $_SERVER['HTTP_USER_AGENT']."<br>";

$host="127.0.0.1";
$port=3306;
$socket="";
$user="Manager";
$password="";
$dbname="empmanage";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


$query = "insert into admin values(\"hujun\", \"hujun\")";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($field1, $field2);
    while ($stmt->fetch()) {
        printf("%s, %s\n", $field1, $field2);
    }
    $stmt->close();
}
?>