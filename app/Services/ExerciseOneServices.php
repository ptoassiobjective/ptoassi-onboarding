<?php

namespace App\Services;

class ExerciseOneServices {

    public function exerciseOne(): array {
        $results = [];
        $start = 1;
        $end = 1000;

        $multiples = $this->repetition($start, $end, [3, 5, 7]);

        $threeOrFive = array_unique(array_merge($multiples[3], $multiples[5]));
        $results['threeOrFive'] = array_sum($threeOrFive);

        $threeAndFive = array_intersect($multiples[3], $multiples[5]);
        $results['threeAndFive'] = array_sum($threeAndFive);

        $threeOrFiveAndSeven = array_intersect($threeOrFive, $multiples[7]);
        $results['threeOrFiveAndSeven'] = array_sum($threeOrFiveAndSeven);

        return $results;
    }

    public function repetition(int $start, int $end, array $multiples): array {

        $multipleResults = [];
        for ($x = $start; $x < $end; $x++) {
            foreach ($multiples as $multiple) {
                if ($this->multiple($x, $multiple)) {
                    $multipleResults[$multiple][] = $x;
                }
            }
        }

        return $multipleResults;
    }

    public function multiple(int $value, int $multiple): bool {

        if ($value % $multiple == 0) {
            return true;
        }

        return false;
    }
}
