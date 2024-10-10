<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\AdminAllInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAllController extends Controller
{
    public function Dashboard(){
        return view('Backend.Admin.admindashboard');
    } // Admin Dashboard

    public function AdminLogin(){
        return view('Backend.pages.login');
    } //For Admin Login

    public function AdminInsert(LoginRequest $request): RedirectResponse
    {
        $request->validate([
            'email'=>'required|regex:/^[a-zA-z@.0-9]+$/u',
        ]);
        $adminlogins = AdminAllInfo::select('email','password')->where('email',$request->email)->first();
        if($adminlogins && Hash::check($request->password,$adminlogins->password)){
            return redirect()->route('admin.dashboard');
        }else{
            return back();
        }


    }
}
