<?php
declare(strict_types=1);


namespace XonneX\AdventOfCode2019\Day2\Part1;


use XonneX\AdventOfCode2019\Base\PuzzleInterface;

class Day2Part1 implements PuzzleInterface
{
    /**
     * @var bool
     */
    private bool $testing;

    /**
     * Day2Part1 constructor.
     * @param bool $testing
     */
    public function __construct(bool $testing = false)
    {
        $this->testing = $testing;
    }

    public function solve(string $input): string
    {
        $program = explode(',', $input);
        $res = '';
        $i = 0;

        if (!$this->testing) {
            $program[1] = '12';
            $program[2] = '2';
        }

        while (true) {
            $opCode = (int)$program[$i];
            $positionVal1 = $program[$i + 1] ?? null;
            $positionVal2 = $program[$i + 2] ?? null;
            $positionResult = $program[$i + 3] ?? null;

            if ($opCode === 1) {
                $program[$positionResult] = $program[$positionVal1] + $program[$positionVal2];
            } else if ($opCode === 2) {
                $program[$positionResult] = $program[$positionVal1] * $program[$positionVal2];
            } else if ($opCode === 99) {
                if ($this->testing) {
                    $res = implode(',', $program);
                } else {
                    $res = $program[0];
                }
                break;
            }

            $i += 4;
        }

        return (string)$res;
    }
}