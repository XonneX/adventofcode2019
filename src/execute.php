<?php
declare(strict_types=1);

use XonneX\AdventOfCode2019\Base\PuzzleInterface;

[1 => $day, 2 => $part] = $argv;

$class = sprintf(
    "XonneX\\AdventOfCode2019\\Day%s\\Part%s\\Day%sPart%s",
    $day,
    $part,
    $day,
    $part
);

$inputPath = sprintf(
    __DIR__ . '/XonneX/AdventOfCode2019/Day%s/Part%s/input.txt',
    $day,
    $part
);

$input = file_get_contents($inputPath);

require __DIR__ . '/../vendor/autoload.php';

/** @var PuzzleInterface $object */
$object = new $class();
$res = $object->solve($input);
echo $res;