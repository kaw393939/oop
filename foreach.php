<?php

$record = array('First Name' => 'Keith', 'Last Name' => 'Williams');
$records[] = $record;
$record = array('First Name' => 'Joe', 'Last Name' => 'Smith');
$records[] = $record;

foreach ($records as $record) {
    foreach ($record as $fieldName => $fieldValue) {
        echo $fieldName . ': ' . $fieldValue;
    }
}

?>
