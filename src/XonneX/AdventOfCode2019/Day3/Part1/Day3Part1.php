<?php
declare(strict_types=1);


namespace XonneX\AdventOfCode2019\Day3\Part1;


use XonneX\AdventOfCode2019\Base\PuzzleInterface;

class Day3Part1 implements PuzzleInterface
{

    public function solve(string $input): string
    {
        $wires = explode("\n", $input);
        $grid = [];

        foreach ($wires as $key => $wire) {
            $instructions = explode(',', $wire);
            $x = 0;
            $y = 0;

            foreach ($instructions as $instruction) {
                $direction = substr($instruction, 0, 1);
                $length = substr($instruction, 1);

                if ($direction === 'R') {
                    while ($length > 0) {
                        $x++;
                        $grid[$x][$y][$key] = true;

                        $length--;
                    }
                } elseif ($direction === 'L') {
                    while ($length > 0) {
                        $x--;
                        $grid[$x][$y][$key] = true;

                        $length--;
                    }
                } elseif ($direction === 'U') {
                    while ($length > 0) {
                        $y++;
                        $grid[$x][$y][$key] = true;

                        $length--;
                    }
                } elseif ($direction === 'D') {
                    while ($length > 0) {
                        $y--;
                        $grid[$x][$y][$key] = true;

                        $length--;
                    }
                }
            }
        }

        $distance = PHP_INT_MAX;

        foreach ($grid as $x => $row) {
            foreach ($row as $y => $value) {
                if (count($value) !== count($wires)) {
                    continue;
                }

                $tmp = abs($x) + abs($y);

                if ($tmp < $distance) {
                    $distance = $tmp;
                }
            }
        }

        return (string)$distance;
    }
}