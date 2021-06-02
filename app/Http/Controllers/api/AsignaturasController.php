<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsignaturasController extends Controller
{
    public function index() {
        
        return response()->json(['key' => 'value']);
    }
}
