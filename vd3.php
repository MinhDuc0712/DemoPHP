<?php
$n=$_REQUEST['n']??0;
$c=$_GET['c']??'red';
if($n==0){
    header('location:vd3.html');
}
echo "<h1>Bang CC $n - Mau nen $c</h1>";
include './function.php';
BCC($n,$c);