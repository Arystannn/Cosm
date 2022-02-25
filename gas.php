<?php

$email = $_POST['mail'];
$tele = $_POST['tel'];
$fio = $_POST['FIO'];

require __DIR__ . '/vendor/autoload.php';
$client = new \Google_Client();
$client->setApplicationName('')
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAuthConfig(__DIR__ . '/credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1Z0fsErosB3fFhZvmUj82KDFtEkR07rZMa3XJ3fkB7E4";

$range = "БД";
$values = [
    ['', $_POST['mail'],$_POST['tel'];$_POST['FIO'];
]
$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
])
$insert = [
    "insertDataOption" => "INSERT_ROWS"
]
$params = [
    'valueInputOption'=> 'RAW'
];
$result = $service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params,
    $insert
)
?>