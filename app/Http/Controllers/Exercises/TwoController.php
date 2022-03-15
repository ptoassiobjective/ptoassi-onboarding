<?php

namespace App\Http\Controllers\Exercises;

use App\Services\ExerciseTwoServices;
use Illuminate\Routing\Controller as BaseController;

class TwoController extends BaseController {

    public function exerciseTwo() {
        $number = request('numero', 7);

        $exerciseTwoService = new ExerciseTwoServices();
        $results = $exerciseTwoService->exerciseTwo($number);

        return view('exercises/two', ['results' => $results, 'number' => $number]);
    }


}
