<?php

namespace App\Services;

use App\Models\Udobrenie;
use Illuminate\Support\Facades\DB;

class UdobrenieService
{

    public function store(mixed $data)
    {

        $udobrenie = Udobrenie::firstOrCreate($data);


    }

    public function update( $data, $udobrenie)
    {
        $udobrenie = $udobrenie->update($data);
        return $udobrenie;
    }
}
