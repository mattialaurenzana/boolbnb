<?php

namespace App\Http\Controllers\Api;

use App\AdditionalService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdditionalServicesController extends Controller
{
    public function index(){
        $services = AdditionalService::all();
        return response()->json($services);
    }
}
