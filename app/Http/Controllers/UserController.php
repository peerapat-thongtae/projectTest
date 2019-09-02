<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users  = User::All();
        return view('user',compact('users'));
    }

   public function create() {
       return view('user.createUser');
   }

   public function store(Request $request)
    {
        $users =  new User([
            'firstname' => $request->get('firstname'),
            'surname' => $request->get('surname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'district' => $request->get('district'),
            'province' => $request->get('province'),
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
