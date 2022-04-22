<?php

namespace App\Http\Controllers\Admin\GrupaKultur;

use App\Http\Controllers\Controller;
use App\Models\GrupaKultur;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class DeleteController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke(GrupaKultur $grupaKultur)
    {
        $grupaKultur->delete();
        return redirect()->route('admin.grupa_kultur.index');
    }

}
