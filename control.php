<?php

$a = 1;
$b = 2;
$c = '';
if ($a == $b) {
    echo 'they are equal';
} elseif ($b != $a) {
    echo 'they are not equal';
}

if (isset($a)) {
    echo 'is set is true';
}

if (is_null($c)) {
    echo 'is null';
}

if (empty($c)) {
    echo 'is empty';

}


$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$associativearray = array('First Name' => 'keith', 'Last Name' =>
    'williams');

$multiArray = array('values' => $array, 'associative' =>
    $associativearray);


foreach ($multiArray as $key => $value) {
    echo $key . ': ' . $value;

}


?>
