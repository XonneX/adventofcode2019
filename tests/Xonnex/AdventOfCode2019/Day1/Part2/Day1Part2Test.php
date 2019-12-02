<?php
declare(strict_types=1);

namespace XonneX\AdventOfCode2019\Day1\Part2;

use PHPUnit\Framework\TestCase;

class Day1Part2Test extends TestCase
{

    public function testSolveEx1(): void
    {
        $solver = new Day1Part2();
        $res = $solver->solve('14');
        $this->assertEquals('2', $res);
    }

    public function testSolveEx2(): void
    {
        $solver = new Day1Part2();
        $res = $solver->solve('1969');
        $this->assertEquals('966', $res);
    }

    public function testSolveEx3(): void
    {
        $solver = new Day1Part2();
        $res = $solver->solve('100756');
        $this->assertEquals('50346', $res);
    }
}
