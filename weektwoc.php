<?php

// table subjects
$subject1 = "Php and mysql";
$subject2 = "Somali";
$subject3 = "SAD";
$subject4 = "Python";
$subject5 = "DBA";
$subject6 = "Software Engineering";


echo $subject1;
echo $subject2;
echo $subject3;
echo $subject4;
echo $subject5;
echo $subject6;

echo "<hr>";
//arrays

$subjects = [
    "php and mysql",
    "Somali",
    "SAD",
    "DBA",
    "Software Engineering",
    "Python"
];

$students = [
    'maxamed cali',
    'xaliimo jaamac',
    'farxiyo maxamed',
];

echo $students[0];
echo $students[1];
echo $students[2];

echo "<hr>";

foreach ($subjects as $name) {
    echo $name;
    echo "<br>";
}
// echo $subjects[5];
echo "<hr>";
foreach ($students as $student) {
    echo $student;
    echo "<br>";
}
