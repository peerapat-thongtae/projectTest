<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
class ProvinceController extends Controller
{
    public function index()
    {
        $provinces  = Province::All();

        return view('province.province',compact('provinces'));
    }

    public function create() {
        return view('province.createProvince');
    }

    public function store(Request $request) {
        $province = new Province([
            'province_name' => $request->get('province_name'),
        ]);
        $province->save();
        return redirect('/province');
    }
}
