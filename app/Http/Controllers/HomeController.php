<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function clients()
    {
        return view("admin.clients");
    }

    public function agents()
    {
        return view("admin.agents");
    }

    public function stores()
    {
        return view("admin.stores");
    }

    public function founders()
    {
        return view("admin.founders");
    }

    public function cashboxes()
    {
        return view("admin.cashboxes");
    }

    public function calculation()
    {
        return view("admin.calculation");
    }

    public function production()
    {
        return view("admin.production");
    }

    public function forecast()
    {
        return view("admin.forecast");
    }

    public function calendar()
    {
        return view("admin.calendar");
    }

    public function sale()
    {
        return view("admin.sale");
    }

    public function order()
    {
        return view("admin.order");
    }

    public function refund()
    {
        return view("admin.refund");
    }

    public function cashbox()
    {
        return view("admin.money-cashbox");
    }

    public function income()
    {
        return view("admin.income");
    }

    public function consumption()
    {
        return view("admin.consumption");
    }

    public function writeOff()
    {
        return view("admin.write-off");
    }

    public function purchase()
    {
        return view("admin.purchase");
    }

    public function debt()
    {
        return view("admin.debt");
    }

    public function profit()
    {
        return view("admin.profit");
    }

    public function founder()
    {
        return view("admin.founder");
    }

    public function sales()
    {
        return view("admin.sales");
    }

    public function paymentExchange()
    {
        return view("admin.payment-exchange");
    }

    public function priceList()
    {
        return view("admin.price-list");
    }

    public function payment()
    {
        return view("admin.payment");
    }

    public function prepayment()
    {
        return view("admin.prepayment");
    }

    public function hrDebt()
    {
        return view("admin.hr-debt");
    }

    public function reportMaterial()
    {
        return view("admin.report-material");
    }

    public function reportReady()
    {
        return view("admin.report-ready");
    }

    public function clientDebt()
    {
        return view("admin.client-debt");
    }

    public function employeeDebt()
    {
        return view("admin.employee-debt");
    }

    public function showcase()
    {
        return view("admin.showcase");
    }

    public function material()
    {
        return view("admin.material");
    }

    public function readyMaterial()
    {
        return view("admin.ready-material");
    }
}
