<?php


//$db = mysql_connect("localhost", "root", "","php_simple_intrvw");
$db = mysqli_connect('localhost','root','');

if(!$db)
{
    echo 'Not connected to server';
}
if(!mysqli_select_db($db,'php_simple_intrvw'))
{
    echo'Database not selected';
}

?>