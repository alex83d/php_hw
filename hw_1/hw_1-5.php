<?php
/*$bmw = [
    'model' => "X5",
    'speed' => 120,
    'doors' => 5,
    'year' => "2015"
];
$toyota = [
    'model' => "X5",
    'speed' => 150,
    'doors' => 5,
    'year' => "2006"
];
$opel = [
    'model' => "X5",
    'speed' => 200,
    'doors' => 5,
    'year' => "2017"
];
function fun(...$name): array
{
    return [...$name];
}

$car = array_map('fun', $bmw, $toyota, $opel);
print_r($car);*/
$cars = [
    ['name' => "bmw",
        'model' => "X5",
        'speed' => 120,
        'doors' => 5,
        'year' => "2015"
    ],
    [
        'name' => "toyota",
        'model' => "X5",
        'speed' => 150,
        'doors' => 4,
        'year' => "2006"
    ],
    ['name' => "opel",
        'model' => "X5",
        'speed' => 200,
        'doors' => 4,
        'year' => "2017"
    ]
];

foreach ($cars as $key => $value) {
    echo '<pre>' . PHP_EOL;
    print_r("CAR " . $value['name'] . '<br>' . " " . $value['model']
        . " " . $value['speed'] . " "
        . $value['doors'] . " " . $value['year'] . PHP_EOL);
}
