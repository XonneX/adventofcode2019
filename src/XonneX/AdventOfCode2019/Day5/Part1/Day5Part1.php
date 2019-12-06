<?php

declare(strict_types=1);


namespace XonneX\AdventOfCode2019\Day5\Part1;


use XonneX\AdventOfCode2019\Base\PuzzleInterface;

class Day5Part1 implements PuzzleInterface
{

    private const MODE_POSITION = 0;
    private const MODE_IMMEDIATE = 1;

    private int $consoleInput = 1;

    public function solve(string $input): string
    {
        $program = explode(',', $input);

        $this->opCodeComputer($program);

        return implode(',', $program);
    }

    /**
     * @param int[] $program
     */
    private function opCodeComputer(array $program): void
    {
        $i = 0;

        $passedInstructions = [];

        while (true) {
            $instruction = (string)$program[$i];

            $opCode = (int)substr($instruction, -2);
            $parameterModes = substr($instruction, 0, -2);

            if ($opCode === false) {
                $opCode = (int)$instruction;
            }

            if ($parameterModes === false) {
                $parameterModes = '';
            }

            $parameterModesLength = strlen($parameterModes);
            $parameterMode1 = 0;
            $parameterMode2 = 0;
            $parameterMode3 = 0;
            $parameter1 = $program[$i + 1] ?? null;
            $parameter2 = $program[$i + 2] ?? null;
            $parameter3 = $program[$i + 3] ?? null;

            $passedInstructions[] = [
                'begin:' . $i,
                $opCode,
                [
                    $parameterMode1,
                    $parameter1,
                ],
                [
                    $parameterMode2,
                    $parameter2,
                ],
                [
                    $parameterMode3,
                    $parameter3,
                ],
            ];

            if (count($passedInstructions) > 10) {
                array_shift($passedInstructions);
                array_shift($passedInstructions);
                array_shift($passedInstructions);
                array_shift($passedInstructions);
                array_shift($passedInstructions);
            }

            if ($parameterModesLength >= 1) {
                $parameterMode1 = (int)$parameterModes[$parameterModesLength - 1];
            }

            if ($parameterModesLength >= 2) {
                $parameterMode2 = (int)$parameterModes[$parameterModesLength - 2];
            }

            if ($parameterModesLength >= 3) {
                $parameterMode3 = (int)$parameterModes[$parameterModesLength - 3];
            }

            if ($opCode === 1) {
                // addition

                if ($parameterMode1 === self::MODE_POSITION) {
                    $value1 = $program[$parameter1];
                } else {
                    $value1 = (int)$parameter1;
                }

                if ($parameterMode2 === self::MODE_POSITION) {
                    $value2 = $program[$parameter2];
                } else {
                    $value2 = (int)$parameter2;
                }

                $result = $value1 + $value2;

                if ($parameterMode3 === self::MODE_POSITION) {
                    $program[$parameter3] = $result;
                } else {
                    $program[$i + 3] = $result;
                }

                $i += 4;
            } elseif ($opCode === 2) {
                // multiplication

                if ($parameterMode1 === self::MODE_POSITION) {
                    $value1 = $program[$parameter1];
                } else {
                    $value1 = (int)$parameter1;
                }

                if ($parameterMode2 === self::MODE_POSITION) {
                    $value2 = $program[$parameter2];
                } else {
                    $value2 = (int)$parameter2;
                }

                $result = $value1 * $value2;

                if ($parameterMode3 === self::MODE_POSITION) {
                    $program[$parameter3] = $result;
                } else {
                    $program[$i + 3] = $result;
                }

                $i += 4;
            } elseif ($opCode === 3) {
                // save to
                $program[$parameter1] = $this->consoleInput;

                $i += 2;
            } elseif ($opCode === 4) {
                // output

                $output = $program[$parameter1];
                echo $output, PHP_EOL;

                if ($output !== 0) {
                    $instructions = array_slice($passedInstructions, -5);
                    echo json_encode($instructions), PHP_EOL;
                }

                $i += 2;
            } elseif ($opCode === 99) {
                break;
            }
        }
    }
}