<?php

namespace Tests\Unit\Services;

use App\Services\ExerciseTwoServices;
use PHPUnit\Framework\TestCase;

class ExerciseTwoServicesTest extends TestCase {

    public function testSumSquaredIsTrue(): void {
        $int = 12;
        $expect = 5;

        $exerciseTwoService = new ExerciseTwoServices();
        $return = $exerciseTwoService->sumSquared($int);

        $this->assertIsInt($return);
        $this->assertEquals($expect, $return);
    }

    public function testSumSquaredIsFalse(): void {
        $int = 12;
        $expect = 3;

        $exerciseTwoService = new ExerciseTwoServices();
        $return = $exerciseTwoService->sumSquared($int);

        $this->assertIsInt($return);
        $this->assertNotEquals($expect, $return);
    }

    public function testRepetitionHappyNumber(): void {
        $happy = 7;
        $expect = 1;

        $exerciseTwoService = new ExerciseTwoServices();
        $return = $exerciseTwoService->repetition($happy);

        $this->assertIsInt($return);
        $this->assertEquals($expect, $return);
    }

    public function testRepetitionNotHappyRepeatNumber(): void {
        $notHappy = 5;
        $notExpect = 1;

        $exerciseTwoService = new ExerciseTwoServices();
        $return = $exerciseTwoService->repetition($notHappy);

        $this->assertIsInt($return);
        $this->assertNotEquals($notExpect, $return);
    }

    public function testRepetitionHappy1Number(): void {
        $happy = 1;
        $expect = 1;

        $exerciseTwoService = new ExerciseTwoServices();
        $return = $exerciseTwoService->repetition($happy);

        $this->assertIsInt($return);
        $this->assertEquals($expect, $return);
    }

    public function testExerciseTwoHappy(): void {
        $number = 7;
        $expect = 'O numero 7 é um numero feliz!';

        $exerciseTwoService = new ExerciseTwoServices();
        $return = $exerciseTwoService->exerciseTwo($number);

        $this->assertIsString($return);
        $this->assertEquals($expect, $return);
    }

    public function testExerciseTwoNotHappy(): void {
        $number = 2;
        $expect = 'O numero 2 não é um numero feliz!';

        $exerciseTwoService = new ExerciseTwoServices();
        $return = $exerciseTwoService->exerciseTwo($number);

        $this->assertIsString($return);
        $this->assertEquals($expect, $return);
    }
}
