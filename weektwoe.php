<?php
$subject = "SAD";

$subjects = [
    'java',
    'c++',
    'python',
    'php and mysql',
];

$subjectsa = [
    [
        'name' => 'java',
        'credit_hour' => 4,
        'department_id' => 1
    ],
    [
        'name' =>  'c++',
        'credit_hour' => 4,


    ],
    [
        'name' => 'python',
        'credit_hour' => 4,

    ],
    [
        'name' => 'php and mysql',
        'credit_hour' => 4,

    ],
];


// echo $subjects[3];

foreach ($subjectsa as $subject) {
    echo $subject['name'] . " ";
    echo $subject['credit_hour'];

    echo "<br>";
}

// echo $subjectsa['name'];
