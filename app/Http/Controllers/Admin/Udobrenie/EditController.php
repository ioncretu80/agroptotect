<?php

namespace App\Http\Controllers\Admin\Udobrenie;

use App\Http\Controllers\Controller;
use App\Models\GrupaKultur;
use App\Models\Udobrenie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class EditController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke(Udobrenie $udobrenie)
    {
        $kulturs = GrupaKultur::all();
        return view('admin.udobrenie.edit',compact("udobrenie", "kulturs"));
    }

}
