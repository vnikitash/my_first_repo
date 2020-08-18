<?php

$json = file_get_contents('index.json');
$array = json_decode($json, true);

$headers = array_keys($array[0]);

$html = '<table border="1"><head>';

foreach ($headers as $key) {
    $html .= "<th>$key</th>";
}

$html .= '</head><body>';

foreach ($array as $row) {
    $html .= '<tr>';
    foreach ($headers as $key) {
        $html .= '<td>' . $row[$key] . '</td>';
    }
    $html .= '</tr>';
}

$html .= '</body></table>';


echo $html;

