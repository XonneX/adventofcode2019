<?php
declare(strict_types=1);


namespace XonneX\AdventOfCode2019\Day1\Part2;


use XonneX\AdventOfCode2019\Base\PuzzleInterface;

class Day1Part2 implements PuzzleInterface
{

    public function solve(string $input): string
    {
        $masses = explode("\n", $input);

        $fuelValue = 0;

        foreach ($masses as $mass) {
            $fuel = 0;
            $tmp = $this->calculateFuelByMass((int)$mass);

            do {
                $fuel += $tmp;

                $tmp = $this->calculateFuelByMass($tmp);
            } while ($tmp > 0);

            $fuelValue += $fuel;
        }

        return (string)$fuelValue;
    }

    private function calculateFuelByMass(int $mass): int
    {
        $fuel = $mass / 3;
        $fuel = (int)$fuel;
        $fuel -= 2;
        return $fuel;
    }
}