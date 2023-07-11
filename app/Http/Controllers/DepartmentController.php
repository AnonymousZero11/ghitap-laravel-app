<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    // Get all services
    public function index()
    {
        $services = DB::table('departments')->orderBy('name', 'desc')->get();

        return response()->json($services);
    }
}
