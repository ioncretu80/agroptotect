<?php

namespace App\Http\Controllers\Admin\Udobrenie;

use App\Http\Controllers\Controller;
use App\Models\GrupaKultur;
use App\Services\UdobrenieService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $service;

    /**
     * @param $service
     */
    public function __construct(UdobrenieService$service)
    {
        $this->service = $service;
    }

}
