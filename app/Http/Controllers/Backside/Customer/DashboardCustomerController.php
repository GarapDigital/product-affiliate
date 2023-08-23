<?php

namespace App\Http\Controllers\Backside\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardCustomerController extends Controller
{
    /**
     * display customer dashboard page.
     *
     * @return View
     */
    public function customerDashboardView(): View
    {
        return view('backside.pages.customer.dashboard');
    }
}
