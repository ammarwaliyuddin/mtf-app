<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        return view('Reports/Reports');
    }
    public function addReport()
    {
        return view('Reports/AddReports');
    }
}
