<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get("/", function () {
    return view('auth.login');
});

Route::prefix("admin")->group(function () {
    Route::get("/", [HomeController::class, 'index'])->name("home");
    Route::get("calculation", [HomeController::class, "calculation"])->name("calculation");
    Route::get("clients", [HomeController::class, 'clients'])->name("clients");
    Route::get("agents", [HomeController::class, "agents"])->name("agents");
    Route::get("stores", [HomeController::class, "stores"])->name("stores");
    Route::get("founders", [HomeController::class, "founders"])->name("founders");
    Route::get("cashboxes", [HomeController::class, "cashboxes"])->name("cashbox");
    Route::get("production", [HomeController::class, "production"])->name("production");
    Route::get("forecast", [HomeController::class, "forecast"])->name("forecast");
    Route::get("calendar", [HomeController::class, "calendar"])->name("calendar");
    Route::get("sale", [HomeController::class, "sale"])->name("sale");
    Route::get("order", [HomeController::class, "order"])->name("order");
    Route::get("refund", [HomeController::class, "refund"])->name("refund");
    Route::get("cashbox", [HomeController::class, "cashbox"])->name("money-cashbox");
    Route::get("income", [HomeController::class, "income"])->name("income");
    Route::get("consumption", [HomeController::class, "consumption"])->name("consumption");
    Route::get("write-off", [HomeController::class, "writeOff"])->name("write-off");
    Route::get("purchase", [HomeController::class, "purchase"])->name("purchase");
    Route::get("debt", [HomeController::class, "debt"])->name("debt");
    Route::get("profit", [HomeController::class, "profit"])->name("profit");
    Route::get("report-founder", [HomeController::class, "founder"])->name("report_founder");
    Route::get("sales", [HomeController::class, "sales"])->name("sales"); // оборот
    Route::get("payment-exchange", [HomeController::class, "paymentExchange"])->name("payment-exchange");
    Route::get("price-list", [HomeController::class, "priceList"])->name("price-list");
    Route::get("payment", [HomeController::class, "payment"])->name("payment");
    Route::get("prepayment", [HomeController::class, "prepayment"])->name("prepayment");
    Route::get("hr-debt", [HomeController::class, "hrDebt"])->name("hr-debt");
    Route::get("report-material", [HomeController::class, "reportMaterial"])->name("report-material");
    Route::get("report-ready", [HomeController::class, "reportReady"])->name("report-ready");
    Route::get("client-debt", [HomeController::class, "clientDebt"])->name("client-debt");
    Route::get("employee-debt", [HomeController::class, "employeeDebt"])->name("employee-debt");
    Route::get("showcase", [HomeController::class, "showcase"])->name("showcase"); // витрина
    Route::get("material", [HomeController::class, "material"])->name("material"); // сырьё
    Route::get("ready-material", [HomeController::class, "readyMaterial"])->name("ready-material"); // готовые
});

Route::prefix("director")->group(function () {
    Route::get("/", [DirectorController::class, 'index'])->name('director');
    Route::get("calculation", [DirectorController::class, "calculation"])->name("director-calculation");
    Route::get("report-ready", [DirectorController::class, "reportReady"])->name("director-report.ready");
    Route::get("report-material", [DirectorController::class, "reportMaterial"])->name("director-material");
    Route::get("client-debt", [DirectorController::class, "clientDebt"])->name("director-client.debt");
    Route::get("employee-debt", [DirectorController::class, "employeeDebt"])->name("director-employee.debt");
    Route::get("showcase", [DirectorController::class, "showcase"])->name("director-showcase");
    Route::get("profit", [DirectorController::class, "profit"])->name("director-profit");
    Route::get("sales", [DirectorController::class, "sales"])->name("director-sales");
});

Route::prefix("founder")->group(function () {
    Route::get("/", [FounderController::class, 'index'])->name('founder');
});

Route::prefix("agent")->group(function () {
    Route::get('/', [AgentController::class, 'index'])->name("agent");
});

Route::prefix("stock")->group(function () {
    Route::get("/", [StockController::class, 'index'])->name("stock");
});

Route::prefix("seller")->group(function () {
    Route::get("/", [SellerController::class, 'index'])->name("seller");
});

Route::prefix("store")->group(function () {
    Route::get("/", [StoreController::class, 'index'])->name("store");
});
