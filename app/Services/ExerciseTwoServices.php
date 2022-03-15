<?php

namespace App\Services;

class ExerciseTwoServices {

    public function exerciseTwo(int $number): string {

        if ($this->repetition($number) == 1){
            return 'O numero ' . $number . ' é um numero feliz!';
        }

        return 'O numero ' . $number . ' não é um numero feliz!';
    }

    public function repetition($number): int {

        $repeat = [];

        while ($number > 1 && !in_array($number, $repeat)) {
            $repeat[] = $number;
            $number = $this->sumSquared($number);
        }

        return $number;
    }

    public function sumSquared(int $number): int {
        $result = 0;

        foreach (str_split($number) as $n) {
            $result += $n * $n;
        }

        return $result;
    }
}

