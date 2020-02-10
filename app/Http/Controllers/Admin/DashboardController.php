<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function contact()
    {
        return view('admin.contact.contact');
    }
    public function about()
    {
        return view('admin.about.about');
    }

}