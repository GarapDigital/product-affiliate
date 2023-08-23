<?php

namespace App\Http\Controllers\Backside\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    /**
     * display dashboard admin page.
     *
     * @return View
     */
    public function dashboardAdminView(): View
    {
        return view('backside.pages.admin.dashboard');
    }
}
