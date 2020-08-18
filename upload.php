<?php

$contents = file_get_contents($_FILES['file']['tmp_name']);
$rows = explode("\r" . PHP_EOL, $contents);

$data = [];

foreach ($rows as $row) {
    $parts = explode(',', $row);
    $data[] = $parts;
}

$keys = array_shift($data);

$response = [];

foreach ($data as $item) {
    $tmp = [];
    foreach ($item as $key => $value) {
        $tmp[$keys[$key]] = $value;
    }

    $response[] = $tmp;
}

print_r($response);

file_put_contents('index.json', json_encode($response));