<?php

namespace App\Http\Controllers\Admin\Udobrenie;

use App\Http\Controllers\Controller;
use App\Models\Udobrenie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class IndexController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $udobrenies = Udobrenie::all();

       return  view("admin.udobrenie.index",compact("udobrenies"));
    }

}
