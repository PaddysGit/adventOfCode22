<?php

declare(strict_types=1);

namespace App\Solver;

use App\Exception\InputNotFoundException;
use Exception;
use JetBrains\PhpStorm\NoReturn;

interface SolverInterface
{
    /**
     * Solves the Puzzle for the given day
     *
     * @param int $testCount
     * @return void
     * @throws InputNotFoundException
     */
    public function solve(int $testCount): void;

    /**
     * Loads the puzzle Input and puts every line in a separate array value
     *
     * @param int $testId
     * @return array<string>
     *
     * @throws InputNotFoundException
     */
    public function loadPuzzleInputAsArray(int $testId): array;

    /**
     * Prints the solution to the cli
     *
     * @param int $part
     * @param string $solutionValue
     *
     * @return void
     */
    #[NoReturn] public function printSolution(int $part, string $solutionValue): void;

    /**
     * Solution for part One
     *
     * @param array<string> $input
     * @return void
     *
     * @throws Exception
     */
    public function partOne(array $input): void;

    /**
     * Solution for part Two
     *
     * @param array<string> $input
     * @return void
     *
     * @throws Exception
     */
    public function partTwo(array $input): void;
}
