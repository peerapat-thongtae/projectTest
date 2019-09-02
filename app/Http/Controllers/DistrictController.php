<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
class DistrictController extends Controller
{
    public function index()
    {
        $district  = District::All();

        return response()->json($district);
    }

    public function create() {
        return view('district.createDistrict');
    }

    public function store(Request $request) {
        $province = new District([
            'district_name' => $request->get('district_name'),
        ]);
        $province->save();
        return redirect('/user');
    }
}
