<?php

namespace Tests\Unit\Services;

use App\Services\ExerciseThreeServices;
use PHPUnit\Framework\TestCase;

class ExerciseThreeServicesTest extends TestCase {

    /**
     * test returns is multiple of 3 or 5
     *
     * @return void
     */
    public function testIf15IsMultiple(): void {
        $int = 15;
        $expect = 'É multiplo de 3 ou 5';

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->isMultiple($int);

        $this->assertIsString($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns is multiple of 3 or 5
     *
     * @return void
     */
    public function testIf9IsMultiple(): void {
        $int = 9;
        $expect = 'É multiplo de 3 ou 5';

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->isMultiple($int);

        $this->assertIsString($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns is multiple of 3 or 5
     *
     * @return void
     */
    public function testIf20IsMultiple(): void {
        $int = 20;
        $expect = 'É multiplo de 3 ou 5';

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->isMultiple($int);

        $this->assertIsString($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns is multiple of 3 or 5
     *
     * @return void
     */
    public function testIf14IsNotMultiple(): void {
        $int = 14;
        $expect = 'Não é multiplo de 3 ou 5';

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->isMultiple($int);

        $this->assertIsString($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns is happy
     *
     * @return void
     */
    public function testIfIsHappy(): void {
        $int = 7;
        $expect = 'O numero 7 é um numero feliz!';

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->isHappy($int);

        $this->assertIsString($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns is not happy
     *
     * @return void
     */
    public function testIfIsNotHappy(): void {
        $int = 3;
        $expect = 'O numero 3 não é um numero feliz!';

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->isHappy($int);

        $this->assertIsString($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns is prime
     *
     * @return void
     */
    public function testIfIsPrime(): void {
        $int = 7;
        $expect = 'É número primo';

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->isPrime($int);

        $this->assertIsString($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns is not prime
     *
     * @return void
     */
    public function testIfIsNotPrime(): void {
        $int = 4;
        $expect = 'Não é número primo';

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->isPrime($int);

        $this->assertIsString($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns a number from a letter
     *
     * @return void
     */
    public function testLetterValue(): void {
        $letters = array_merge(range('a', 'z'), range('A', 'Z'));
        $expect = range(1, 52);

        $returns = [];
        foreach ($letters as $letter) {
            $exerciseThreeService = new ExerciseThreeServices();
            $return = $exerciseThreeService->number($letter);
            $returns[] = $return;
        }

        $this->assertIsInt($return);
        $this->assertCount(52, $returns);
        $this->assertEquals($expect, $returns);
    }

    /**
     * test returns a number from not a letter
     *
     * @return void
     */
    public function testNotLetterValue(): void {
        $letters = ['/', 0, 'Ç', 'á', ' '];
        $expect = [0, 0, 0, 0, 0];

        $returns = [];
        foreach ($letters as $letter) {
            $exerciseThreeService = new ExerciseThreeServices();
            $return = $exerciseThreeService->number($letter);
            $returns[] = $return;
        }

        $this->assertIsInt($return);
        $this->assertCount(5, $returns);
        $this->assertEquals($expect, $returns);
    }

    /**
     * test returns a sum from words
     *
     * @return void
     */
    public function testSumWords(): void {
        $phraseArray = ['Hello', 'world', '!', 'a'];
        $expect = ['Hello' => 78, 'world' => 72, '!' => 0, 'a' => 1];

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->sumLettersFromArray($phraseArray);

        $this->assertIsArray($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns a array of clean words
     *
     * @return void
     */
    public function testCleanArrayWords(): void {
        $phrase = 'Hello world!';
        $expect = ['Hello', 'world'];

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->cleanAndTransform($phrase);

        $this->assertIsArray($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns a array with params
     *
     * @return void
     */
    public function testExerciseThreeSuccess(): void {
        $phrase = 'Hello world!';
        $expect = [
            'Hello' => [
                'sum' => 78,
                'prime' => 'Não é número primo',
                'happy' => 'O numero 78 não é um numero feliz!',
                'multiple' => 'É multiplo de 3 ou 5',
            ],
            'world' => [
                'sum' => 72,
                'prime' => 'Não é número primo',
                'happy' => 'O numero 72 não é um numero feliz!',
                'multiple' => 'É multiplo de 3 ou 5',
            ],
        ];

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->exerciseThree($phrase);

        $this->assertIsArray($return);
        $this->assertEquals($expect, $return);
    }

    /**
     * test returns a array with params
     *
     * @return void
     */
    public function testExerciseThreeHappyPrimeSuccess(): void {
        $phrase = 'g';
        $expect = [
            'g' => [
                'sum' => 7,
                'prime' => 'É número primo',
                'happy' => 'O numero 7 é um numero feliz!',
                'multiple' => 'Não é multiplo de 3 ou 5',
            ]
        ];

        $exerciseThreeService = new ExerciseThreeServices();
        $return = $exerciseThreeService->exerciseThree($phrase);

        $this->assertIsArray($return);
        $this->assertEquals($expect, $return);
    }
}
