<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\AccoutnRequest;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Show view login
     */
    public function showLogin () 
    {   
 
        return view('auth.login');
    }

    /**
     * Xử Lí Login
     */
    public function login (LoginRequest $request) 
    {   
        
        $data = [
            'email' => $request->email, // => Gán email từ cột DB vào mảng $data có value mặc định là email và password
            'password' => $request->password
            
        ];

        if (Auth::attempt($data)) {  // phương thức Auth check
            $request->session()->regenerate(); 

            return redirect()->route('admin.user.index'); // Cần chỉnh sửa đường dẫn đến View HomePage 
        }else{
            return redirect()->route('auth.showLogin')->with('loi','Somethings Went Wrong'); // Cần chỉnh sửa đường dẫn đến View HomePage 
        }

    }

    /**
     * Logout
     */
    public function logout (Request $request) 
    {
        // Revoke the token that was used to authenticate the current request...
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();

        return redirect()->route('auth.showLogin');
    }

    /**
     * Show View create Account
    
     */

    public function show_registration () 
    {
        return view('auth.createAccount');
    }

    /**
     * Xử Lí DB create Account
     */
    public function registration (AccoutnRequest $request) 
    {   
        
        $data = $request->except('_token','password_confirmation');
        $data['password'] = bcrypt($request->password);  // ma hoa bcryp mhat khau
        $data['created_at'] = new \DateTime();

        DB::table('users')->insert($data);

        return redirect()->route('auth.showLogin')->with('success','Created account successfull');
    }
}
