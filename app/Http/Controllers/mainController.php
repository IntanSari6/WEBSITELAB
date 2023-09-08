<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function requestLoans()
    {
        return view('requestLoans.index');
    }

    public function manage_loans()
    {
        return view('manage_loans.index');
    }

    public function manage_schedule()
    {
        return view('manage_schedule.index');
    }

    public function request()
    {
        return view('requestLoans.request');
    }
}
