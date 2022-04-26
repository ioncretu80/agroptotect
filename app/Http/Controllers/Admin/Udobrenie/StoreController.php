<?php

namespace App\Http\Controllers\Admin\Udobrenie;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GrupaKultur\StoreRequest;
use App\Models\GrupaKultur;
use App\Models\Udobrenie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class StoreController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke(\App\Http\Requests\Admin\Udobrenie\StoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('admin.udobrenie.index');
    }

}
