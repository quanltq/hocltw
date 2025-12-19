<?php
$serverName = "LAPTOP-GC7MDMP7\\SQLEXPRESS01";
$connectionOptions = [
    "Database" => "SV",
    "CharacterSet" => "UTF-8"
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
