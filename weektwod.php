<?php

$fullname = "jaamac cali";
$age = 90;
$blood_type = "A";
$phone = 32410914868687;


$fullname2 = "jaamac cali";
$age2 = 90;
$blood_type2 = "A";
$phone2 = 32410914868687;

echo $fullname;
echo  "<br>";
echo $age;
echo  "<br>";
echo $blood_type;
echo  "<br>";
echo $phone;
echo  "<br>";


$people = [

    [
        'name' => 'jaamac cali',
        'age' => 90,
        'blood_type' => 'A',
        'phone' => 8876876876
    ],


];
echo  "<hr>";

foreach ($people as $person) {
    echo $person['name'];
    echo  "<br>";
    echo $person['age'];
    echo  "<br>";
    echo $person['blood_type'];
    echo  "<br>";
    echo $person['phone'];
    echo  "<br>";
}
