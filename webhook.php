<?php
$log = date('Y-m-d H:i:s') . ' Запись в лог';
file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
