<?php

namespace App\Http\Controllers;
use App\User;
use App\District;
use App\Province;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users  = User::All();
        $provinces = Province::All();
        return view('user',compact('users','provinces'));
    }
    
   public function create() {
        if (Auth::check()) {
       $provinces = Province::All();
       
       return view('user.createUser',compact('provinces'));
        } else {
            return view('auth.login');
        }
   }

   public function getDistrict($id) {
       $districts = District::Where('province_id' ,$id)->pluck('district_name','district_id');
       //return response()->json($districts);
       return $districts->all();
   }
   public function store(Request $request)
    {
        $province = Province::select('province_name')->Where('province_id',$request->get('province'))->first();
        $district = District::select('district_name')->Where('district_id',$request->get('district'))->first();
        $users =  new User([
            'firstname' => $request->get('firstname'),
            'surname' => $request->get('surname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'district' => $request->get('district'),
            'province' => $province->province_name,
            'zipcode' => $request->get('zipcode'),
            'password' => Hash::make($request->get('password')),
            
            
        ]);
        $users->save();
        return redirect('/user');
    }
    
    public function search(Request $request) {
        
        $searchtype = $request->get('type');
        $searchinput = trim($request->get('search'));
        
        $users = User::Where($searchtype,'like',$searchinput)->get();
        return view('user',compact('users'));
        
    }
}
