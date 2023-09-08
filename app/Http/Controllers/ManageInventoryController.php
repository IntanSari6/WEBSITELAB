<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryLab;

class ManageInventoryController extends Controller
{
    public function manage_lab_inventory()
    {
        return view('manage_lab_inventory.index');
    }
    public function lab1()
    {
        return view('manage_lab_inventory.lab1');
    }
    public function lab2()
    {
        return view('manage_lab_inventory.lab2');
    }

    public function detail()
    {
        return view('manage_lab_inventory.detail');
    }
    function edit($id){
        $data = Siswa::whereId($id)->first();
        return view('edit', compact(['data']));
    }

}
