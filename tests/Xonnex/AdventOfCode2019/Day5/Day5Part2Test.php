<?php

declare(strict_types=1);

namespace XonneX\AdventOfCode2019\Day5\Part2;

use PHPUnit\Framework\TestCase;

class Day5Part2Test extends TestCase
{

    public function testSolveEx1_1(): void
    {
        $solver = new Day5Part2(1);
        $solver->solve('3,9,8,9,10,9,4,9,99,-1,8');
        $this->expectOutputString('0' . PHP_EOL);
    }

    public function testSolveEx1_2(): void
    {
        $solver = new Day5Part2(8);
        $solver->solve('3,9,8,9,10,9,4,9,99,-1,8');
        $this->expectOutputString('1' . PHP_EOL);
    }

    public function testSolveEx2_1(): void
    {
        $solver = new Day5Part2(0);
        $solver->solve('3,12,6,12,15,1,13,14,13,4,13,99,-1,0,1,9');
        $this->expectOutputString('0' . PHP_EOL);
    }

    public function testSolveEx2_2(): void
    {
        $solver = new Day5Part2(6);
        $solver->solve('3,12,6,12,15,1,13,14,13,4,13,99,-1,0,1,9');
        $this->expectOutputString('1' . PHP_EOL);
    }

    public function testSolveEx3_1(): void
    {
        $solver = new Day5Part2(0);
        $solver->solve(
            '3,21,1008,21,8,20,1005,20,22,107,8,21,20,1006,20,31,1106,0,36,98,0,0,1002,21,125,20,4,20,1105,1,46,104,999,1105,1,46,1101,1000,1,20,4,20,1105,1,46,98,99'
        );
        $this->expectOutputString('999' . PHP_EOL);
    }

    public function testSolveEx3_2(): void
    {
        $solver = new Day5Part2(8);
        $solver->solve(
            '3,21,1008,21,8,20,1005,20,22,107,8,21,20,1006,20,31,1106,0,36,98,0,0,1002,21,125,20,4,20,1105,1,46,104,999,1105,1,46,1101,1000,1,20,4,20,1105,1,46,98,99'
        );
        $this->expectOutputString('1000' . PHP_EOL);
    }

    public function testSolveEx3_3(): void
    {
        $solver = new Day5Part2(12354);
        $solver->solve(
            '3,21,1008,21,8,20,1005,20,22,107,8,21,20,1006,20,31,1106,0,36,98,0,0,1002,21,125,20,4,20,1105,1,46,104,999,1105,1,46,1101,1000,1,20,4,20,1105,1,46,98,99'
        );
        $this->expectOutputString('1001' . PHP_EOL);
    }

    public function testSolution(): void
    {
        $solver = new Day5Part2(5);
        $solver->solve(file_get_contents(__DIR__ . '/../../../../src/XonneX/AdventOfCode2019/Day5/Part2/input.txt'));
        $this->expectOutputString('7161591' . PHP_EOL);
    }
}
