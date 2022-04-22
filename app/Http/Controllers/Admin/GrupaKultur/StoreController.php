<?php

namespace App\Http\Controllers\Admin\GrupaKultur;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GrupaKultur\StoreRequest;
use App\Models\GrupaKultur;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class StoreController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        GrupaKultur::firstOrCreate($data);
        return redirect()->route('admin.grupa_kultur.index');
    }

}
