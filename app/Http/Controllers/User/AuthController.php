<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

class AuthController extends Controller
{
    public function showLogin(){
        return view('user.auth.login');
    }

    public function postLogin(Request $request){
         if(User::where('email',$request->email)->first()){
            if(Auth::attempt($request->only('email','password'))){
                return redirect('/');
            }else{
                return redirect()->back()->with('danger','Password not Found');
            }
         }else{
            return redirect()->back()->with('danger','Email not Found');
         }
    }

    public function showRegister(){
        return view('user.auth.register');
    }

    public function postRegister(Request $request){
        //image upload
        $file = $request->file('image');
        $file_name = uniqid(time()).$file->getClientOriginalName();
        $file_path = "image/".$file_name;
        $file->storeAs('image',$file_name);
        //dataase isset
        User::create([
            'name'=>$request->name,
            'email'=>$request->name,
            'image'=>$file_path,
            'password'=>Hash::make($request->password),

        ]);
        //redirect
        return redirect(url('/login'))->with('success','Register created Please Login');
    }

    public function logOut(){
        Auth::logout();
        return redirect(url('/login'));
    }
}
