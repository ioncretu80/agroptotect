<?php

namespace App\Http\Controllers\Admin\GrupaKultur;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GrupaKultur\UpdateRequest;
use App\Models\GrupaKultur;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UpdateController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke(UpdateRequest $request, GrupaKultur $grupaKultur)
    {

        $data = $request->validated();
        $grupaKultur->update($data);
//        return redirect()->route('admin.grupa_kultur.index');
        return view('admin.grupa_cultur.show', compact('grupaKultur'));
    }

}
