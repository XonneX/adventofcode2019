<?php

declare(strict_types=1);


namespace XonneX\AdventOfCode2019\Day4\Part2;


use XonneX\AdventOfCode2019\Base\PuzzleInterface;

class Day4Part2 implements PuzzleInterface
{

    public function solve(string $input): string
    {
        $arr = explode('-', $input);
        $numbers = range($arr[0], $arr[1]);

        $counter = 0;

        foreach ($numbers as $number) {
            if ($this->match((string)$number)) {
                $counter++;
            }
        }

        return (string)$counter;
    }

    private function match(string $password): bool
    {
        $strLen = 6;

        $previousChar = null;
        for ($i = 0; $i < $strLen; $i++) {
            $currentChar = $password[$i];

            if ($previousChar === null) {
                $previousChar = $currentChar;
                continue;
            }

            if (((int)$previousChar) > ((int)$currentChar)) {
                return false;
            }

            $previousChar = $currentChar;
        }

        $password = preg_replace('/([\d])\1{2,}/m', '', $password);

        $previousChar = null;
        $found = false;
        $strLen = strlen($password);
        for ($i = 0; $i < $strLen; $i++) {
            $currentChar = $password[$i];

            if ($previousChar === $currentChar) {
                $found = true;
                break;
            }

            $previousChar = $currentChar;
        }

        if (!$found) {
            return false;
        }

        return true;
    }
}