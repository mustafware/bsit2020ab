<?php

$firstname = "xaawo";
$fathersname = "cali";
//one way
echo $firstname;
echo $fathersname;
echo "<hr>";
//second way
echo $firstname . $fathersname;
echo "<hr>";
//third way
$space = " ";
echo "magacaygu waa " . $firstname . " " . $fathersname;
echo "<hr>";

//fourtth way
echo "magacaygu waa " . $firstname . $space . $fathersname;
echo "<hr>";
//fifth way;
echo "magacaygy waa $firstname $fathersname";

echo "<hr>";
echo "magacaygu waa {$firstname} {$fathersname}";
