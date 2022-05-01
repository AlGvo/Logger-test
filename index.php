<?php

include __DIR__.'/vendor/autoload.php';

$formatter = new Logger\Formater\Formatter();
$writerFile = new Logger\Writer\FileWriter($formatter);
$writerDb = new Logger\Writer\DbWriter();

//Only for first log run
$writerDb->createTable();

$logger = new Logger\Logger([$writerFile,$writerDb]);
$test = new Test\Test($logger);
echo $test->sum(6,9) . PHP_EOL;
echo $test->divide(18,9);