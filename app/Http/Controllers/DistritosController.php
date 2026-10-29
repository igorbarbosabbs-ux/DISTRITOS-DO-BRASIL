<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistritosController extends Controller
{
    public function index(){
        $cities = DB::select("SELECT ID, Name, CountryCode, District, Population FROM CITY where District = 'Santa Catarina'");

        return view('city', compact('cities'));
    }
}
