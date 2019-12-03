<?php
declare(strict_types=1);


namespace XonneX\AdventOfCode2019\Day2\Part2;


use RuntimeException;
use XonneX\AdventOfCode2019\Base\PuzzleInterface;

class Day2Part2 implements PuzzleInterface
{

    public function solve(string $input): string
    {
        for ($i = 0; $i <= 99; $i++) {
            for ($ii = 0; $ii <= 99; $ii++) {
                $res = $this->calc($input, $i, $ii);

                if ($res === 19690720) {
                    return (string)(100 * $i + $ii);
                }
            }
        }

        throw new RuntimeException('nope');
    }

    private function calc(string $input, int $noun, int $verb): int
    {
        $program = explode(',', $input);
        $program[1] = $noun;
        $program[2] = $verb;
        $i = 0;

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
                return $program[0];
            }

            $i += 4;
        }

        throw new RuntimeException('nope');
    }
}