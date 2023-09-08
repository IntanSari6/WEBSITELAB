<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function inventaris()
    {
        return view('inventaris.index');
    }
    public function lab_1()
    {
        return view('inventaris.lab_1');
    }
    public function lab_2()
    {
        return view('inventaris.lab_2');
    }
}
