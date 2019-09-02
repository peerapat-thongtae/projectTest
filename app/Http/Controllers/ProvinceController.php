<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
class ProvinceController extends Controller
{
    public function index()
    {
        $province  = Province::All();

        return response()->json($province);
    }

    public function create() {
        return view('province.createProvince');
    }

    public function store(Request $request) {
        $province = new Province([
            'province_name' => $request->get('province_name'),
        ]);
        $province->save();
        return redirect('/user');
    }
}
