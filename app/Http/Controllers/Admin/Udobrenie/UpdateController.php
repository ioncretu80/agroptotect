<?php

namespace App\Http\Controllers\Admin\Udobrenie;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Udobrenie\UpdateRequest;
use App\Models\GrupaKultur;
use App\Models\Udobrenie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UpdateController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke(UpdateRequest $request, Udobrenie $udobrenie)
    {

        $data = $request->validated();
        $this->service->update($data, $udobrenie);


        $kulturs = GrupaKultur::all();

        return view('admin.udobrenie.show', compact('udobrenie','kulturs'));
    }

}
