<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\District;
class DistrictController extends Controller
{
    public function index()
    {
        $districts  = District::LeftJoin('provinces', 'provinces.province_id', '=', 'districts.province_id')->orderBy('provinces.province_name')->get();

        return view('district.district',compact('districts'));
    }

    public function create() {
        $provinces = Province::All();
        return view('district.createDistrict',compact('provinces'));
    }

    public function store(Request $request) {
        $province = new District([
            'province_id' => $request->get('province'),
            'district_name' => $request->get('district_name'),
        ]);
        $province->save();
        return redirect('/district');
    }
}
