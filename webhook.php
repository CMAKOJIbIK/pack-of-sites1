<?php
$log = date('Y-m-d H:i:s') . json_encode($_POST);
$log = date('Y-m-d H:i:s') . json_encode($_GET);
file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
