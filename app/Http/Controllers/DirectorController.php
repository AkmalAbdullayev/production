<?php

namespace App\Http\Controllers;

class DirectorController extends Controller
{
    public function index()
    {
        return view("director.index");
    }

    public function calculation()
    {
        return view("director.calculation");
    }

    public function reportReady()
    {
        return view('director.report-ready');
    }

    public function reportMaterial()
    {
        return view("director.report-material");
    }

    public function clientDebt()
    {
        return view("director.client-debt");
    }

    public function employeeDebt()
    {
        return view("director.employee-debt");
    }

    public function showcase()
    {
        return view("director.showcase");
    }

    public function profit()
    {
        return view("director.profit");
    }

    public function sales()
    {
        return view("director.sales");
    }
}
