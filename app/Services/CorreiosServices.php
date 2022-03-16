<?php

namespace App\Services;

use App\Contracts\CorreiosInterface;

class CorreiosServices implements CorreiosInterface {

    public function getValor(string $cep): float {
        return '50.0';
    }
}
