<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAllController extends Controller
{
    public function Dashboard(){
        return view('Backend.Admin.admindashboard');
    } // Admin Dashboard
}
