<?php
declare(strict_types=1);


namespace XonneX\AdventOfCode2019\Base;


interface PuzzleInterface
{
    public function solve(string $input): string;
}