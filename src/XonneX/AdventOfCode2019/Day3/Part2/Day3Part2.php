<?php
declare(strict_types=1);


namespace XonneX\AdventOfCode2019\Day3\Part2;


use XonneX\AdventOfCode2019\Base\PuzzleInterface;

class Day3Part2 implements PuzzleInterface
{

    public function solve(string $input): string
    {
        $wires = explode("\n", $input);
        $grid = [];

        foreach ($wires as $key => $wire) {
            $instructions = explode(',', $wire);
            $x = 0;
            $y = 0;
            $wireLength = 0;

            foreach ($instructions as $instruction) {
                $direction = substr($instruction, 0, 1);
                $length = substr($instruction, 1);

                if ($direction === 'R') {
                    while ($length > 0) {
                        $wireLength++;
                        $x++;
                        $grid[$x][$y][$key] = $wireLength;

                        $length--;
                    }
                } elseif ($direction === 'L') {
                    while ($length > 0) {
                        $wireLength++;
                        $x--;
                        $grid[$x][$y][$key] = $wireLength;

                        $length--;
                    }
                } elseif ($direction === 'U') {
                    while ($length > 0) {
                        $wireLength++;
                        $y++;
                        $grid[$x][$y][$key] = $wireLength;

                        $length--;
                    }
                } elseif ($direction === 'D') {
                    while ($length > 0) {
                        $wireLength++;
                        $y--;
                        $grid[$x][$y][$key] = $wireLength;

                        $length--;
                    }
                }
            }
        }

        $intersections = [];

        foreach ($grid as $x => $row) {
            foreach ($row as $y => $value) {
                if (count($value) !== count($wires)) {
                    continue;
                }

                $intersections[] = $value;
            }
        }

        $minSteps = PHP_INT_MAX;

        foreach ($intersections as $intersection) {
            $tmp = $intersection[0] + $intersection[1];

            if ($tmp < $minSteps) {
                $minSteps = $tmp;
            }
        }

        return (string)$minSteps;
    }
}