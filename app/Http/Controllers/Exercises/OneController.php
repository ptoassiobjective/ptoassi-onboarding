<?php

namespace App\Http\Controllers\Exercises;

use App\Services\ExerciseOneServices;
use Illuminate\Routing\Controller as BaseController;

class OneController extends BaseController {

    public function exerciseOne() {

        $exerciseOneService = new ExerciseOneServices();
        $results = $exerciseOneService->exerciseOne();

        return view('exercises/one', ['results' => $results]);
    }


}
