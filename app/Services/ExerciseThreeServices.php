<?php

namespace App\Services;

class ExerciseThreeServices {

    public function exerciseThree(string $phrase): array {

        $phraseArray = $this->cleanAndTransform($phrase);

        $phraseArraySoma = $this->sumLettersFromArray($phraseArray);

        $wordArray = [];
        foreach ($phraseArraySoma as $word => $sum) {
            $wordArray[$word]['sum'] = $sum;
            $wordArray[$word]['prime'] = $this->isPrime($sum);
            $wordArray[$word]['happy'] = $this->isHappy($sum);
            $wordArray[$word]['multiple'] = $this->isMultiple($sum);
        }

        return $wordArray;
    }

    public function cleanAndTransform(string $phrase): array {

        $phrase = preg_replace('/[^a-zA-Z\s]/', '', $phrase);

        return preg_split('/\s/', $phrase);
    }

    public function sumLettersFromArray(array $phraseArray): array {
        $words = [];

        foreach ($phraseArray as $word) {
            $wordArray = str_split($word);
            $sum = 0;

            foreach ($wordArray as $letter) {
                $sum += $this->number($letter);
            }

            $words[$word] = $sum;
        }

        return $words;
    }

    public function number(string $letter): int {
        $ascii = ord($letter);

        if ($ascii >= 65 && $ascii <= 90) {
            return $ascii - 38;
        }

        if ($ascii >= 97 && $ascii <= 122) {
            return $ascii - 96;
        }

        return 0;
    }

    public function isPrime(int $number): string {
        for ($i = 2; $i <= $number / 2; $i++) {
            if ($number % $i == 0) {
                return 'Não é número primo';
            }
        }
        return 'É número primo';
    }

    public function isHappy(int $number): string {

        $exerciseTwoService = new ExerciseTwoServices();
        return $exerciseTwoService->exerciseTwo($number);
    }

    public function isMultiple(int $number): string {

        $exerciseOneService = new ExerciseOneServices();
        $three = $exerciseOneService->multiple($number, 3);
        $five = $exerciseOneService->multiple($number, 5);

        if ($three || $five) {
            return 'É multiplo de 3 ou 5';
        }

        return 'Não é multiplo de 3 ou 5';
    }
}

