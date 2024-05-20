<?php

$apiUrl = 'https://catfact.ninja/fact';

$data = file_get_contents($apiUrl);

if ($data !== false) {
    $catFact = json_decode($data);

    if (isset($catFact->fact)) {
        echo 'Cat Fact: ' . $catFact->fact . PHP_EOL;
    } else {
        echo 'Failed to get cat fact.' . PHP_EOL;
    }
} else {
    echo 'Failed to get data from the API.' . PHP_EOL;
}