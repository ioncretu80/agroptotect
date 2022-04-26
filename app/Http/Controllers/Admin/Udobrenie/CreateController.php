<?php

namespace App\Http\Controllers\Admin\Udobrenie;

use App\Http\Controllers\Controller;
use App\Models\GrupaKultur;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CreateController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        $kulturs = GrupaKultur::all();
        return  view("admin.udobrenie.create", compact("kulturs"));
    }

}
