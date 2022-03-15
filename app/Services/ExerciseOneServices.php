<?php

namespace App\Services;

class ExerciseOneServices {

    public function exerciseOne(): array {
        $results = [];
        $start = 1;
        $end = 1000;

        $multiple3 = $this->repetition($start, $end, 3);
        $multiple5 = $this->repetition($start, $end, 5);
        $multiple7 = $this->repetition($start, $end, 7);

        $threeOrFive = array_unique(array_merge($multiple3, $multiple5));
        $results['threeOrFive'] = array_sum($threeOrFive);

        $threeAndFive = array_intersect($multiple3, $multiple5);
        $results['threeAndFive'] = array_sum($threeAndFive);

        $threeOrFiveAndSeven = array_intersect($threeOrFive, $multiple7);
        $results['threeOrFiveAndSeven'] = array_sum($threeOrFiveAndSeven);

        return $results;
    }

    public function repetition(int $start, int $end, int $multiple): array {

        $multiples = [];
        for ($x = $start; $x < $end; $x++) {
            if ($this->multiple($x, $multiple)) {
                $multiples[] = $x;
            }
        }

        return $multiples;
    }

    public function multiple(int $value, int $multiple): bool {

        if ($value % $multiple == 0) {
            return true;
        }

        return false;
    }
}
