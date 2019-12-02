<?php
declare(strict_types=1);


namespace XonneX\AdventOfCode2019\Day1\Part1;



use XonneX\AdventOfCode2019\Base\PuzzleInterface;

class Day1Part1 implements PuzzleInterface
{

    public function solve(string $input): string
    {
        $masses = explode("\n", $input);

        $fuelValue = 0;

        foreach ($masses as $mass) {
            $tmp = ((int)$mass) / 3;
            $tmp = floor($tmp);
            $tmp -= 2;
            $fuelValue += $tmp;
        }

        return (string)$fuelValue;
    }
}