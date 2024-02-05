<?php
echo date("Y-F-d"). "<br>";
echo date("y-m-d"). "<br>";
echo date("H:i:s"). "<br>";
echo date("Y-m-d H:i:s"). "<br>";
echo date("j.n Y G:i"). "<br>";

echo date("j.n Y"). "<br>";
echo strtotime("+ 1 day"). "<br>";
$prvniden=strtotime("first day of next month");
echo date("Y-m-d H:i:s",$prvniden). "<br>";

$posledniden=strtotime("last day of next month");
echo date("Y-m-d H:i:s",$posledniden). "<br>";

$vcera = strtotime("yesterday"). "<br>";
echo date("y-m-d",$vcera);