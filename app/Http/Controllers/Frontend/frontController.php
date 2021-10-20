<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(Request $request)
    {

        return view('frontend.pages.home.index', [
            // 'company'  => $company,
            // 'vehicle_infos' => $vehicle_infos,
        ]);
    }
    public function company(Request $request)
    {
        
        return view('frontend.pages.company.index', [
            // 'company'  => $company,
            // 'vehicle_infos' => $vehicle_infos,
        ]);
    }

    public function policy(Request $request)
    {
        
        return view('frontend.pages.policy.index', [
            // 'company'  => $company,
            // 'vehicle_infos' => $vehicle_infos,
        ]);
    }
    public function form(Request $request)
    {
        
        return view('frontend.pages.home.form', [
            // 'company'  => $company,
            // 'vehicle_infos' => $vehicle_infos,
        ]);
    }
}
