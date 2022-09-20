<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BudayaController extends Controller
{
    public function index()
    {
        return view("pages.budaya");
    }
}
