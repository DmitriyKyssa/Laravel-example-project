<?php

namespace App\Http\Controllers;

use App\Services\Product\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
