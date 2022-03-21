<?php

namespace Tests\Unit\Services;

use App\Services\ExerciseOneServices;
use PHPUnit\Framework\TestCase;

class ExerciseOneServicesTest extends TestCase {

    public function testMultipleIsTrue(): void {
        $int = 9;
        $multiple = 3;

        $exerciseOneService = new ExerciseOneServices();
        $return = $exerciseOneService->multiple($int, $multiple);

        $this->assertTrue($return);
    }

    public function testMultipleIsFalse(): void {
        $int = 8;
        $multiple = 3;

        $exerciseOneService = new ExerciseOneServices();
        $return = $exerciseOneService->multiple($int, $multiple);

        $this->assertFalse($return);
    }

    public function testRepetitionMultipleOfThree(): void {
        $start = 1;
        $end = 10;
        $multiple = [3];
        $expect = [3, 6, 9];

        $exerciseOneService = new ExerciseOneServices();
        $multiples = $exerciseOneService->repetition($start, $end, $multiple);

        $this->assertEquals($expect, $multiples[3]);
    }

    public function testRepetitionMultipleOfFour(): void {
        $start = 1;
        $end = 10;
        $multiple = [4];
        $expect = [3, 6, 9];

        $exerciseOneService = new ExerciseOneServices();
        $multiples = $exerciseOneService->repetition($start, $end, $multiple);

        $this->assertIsArray($multiples);
        $this->assertNotEquals($expect, $multiples[4]);
    }

    public function testRepetitionMultipleOfFive(): void {
        $start = 1;
        $end = 100;
        $multiple = [5];
        $expect = 19;

        $exerciseOneService = new ExerciseOneServices();
        $multiples = $exerciseOneService->repetition($start, $end, $multiple);

        $this->assertIsArray($multiples);
        $this->assertCount($expect, $multiples[5]);
        $this->assertContains(10, $multiples[5]);
        $this->assertNotContains(100, $multiples[5]);
        $this->assertNotContains(9, $multiples[5]);
    }

    public function testExerciseOne(): void {
        $exerciseOneService = new ExerciseOneServices();
        $return = $exerciseOneService->exerciseOne();

        $this->assertIsArray($return);
        $this->assertArrayHasKey('threeOrFive', $return);
        $this->assertArrayHasKey('threeAndFive', $return);
        $this->assertArrayHasKey('threeOrFiveAndSeven', $return);
        $this->assertEquals(233168, $return['threeOrFive']);
        $this->assertEquals(33165, $return['threeAndFive']);
        $this->assertEquals(33173, $return['threeOrFiveAndSeven']);
    }
}
