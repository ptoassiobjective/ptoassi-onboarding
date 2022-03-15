<?php

namespace App\Http\Controllers\Exercises;

use App\Services\ExerciseThreeServices;
use Illuminate\Routing\Controller as BaseController;

class ThreeController extends BaseController {

    public function exerciseThree() {
        $phrase = request('phrase', 'frase de exemplo');

        $exerciseThreeService = new ExerciseThreeServices();
        $results = $exerciseThreeService->exerciseThree($phrase);

        return view('exercises/three', ['results' => $results, 'phrase' => $phrase]);
    }


}
