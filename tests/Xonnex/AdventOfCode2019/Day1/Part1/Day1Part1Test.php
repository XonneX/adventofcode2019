<?php
declare(strict_types=1);

namespace XonneX\AdventOfCode2019\Day1\Part1;

use XonneX\AdventOfCode2019\Day1\Part1\Day1Part1;
use PHPUnit\Framework\TestCase;

class Day1Part1Test extends TestCase
{

    public function testSolveEx1(): void
    {
        $solver = new Day1Part1();
        $res = $solver->solve('12');
        $this->assertEquals('2', $res);
    }

    public function testSolveEx2(): void
    {
        $solver = new Day1Part1();
        $res = $solver->solve('14');
        $this->assertEquals('2', $res);
    }

    public function testSolveEx3(): void
    {
        $solver = new Day1Part1();
        $res = $solver->solve('1969');
        $this->assertEquals('654', $res);
    }

    public function testSolveEx4(): void
    {
        $solver = new Day1Part1();
        $res = $solver->solve('100756');
        $this->assertEquals('33583', $res);
    }

    public function testSolveEx5(): void
    {
        $solver = new Day1Part1();
        $res = $solver->solve(file_get_contents(__DIR__ . '/../../../../../src/XonneX/AdventOfCode2019/Day1/Part1/input.txt'));
        $this->assertTrue($res > 22206);
    }
}
