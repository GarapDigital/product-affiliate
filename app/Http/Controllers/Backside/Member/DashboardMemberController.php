<?php

namespace App\Http\Controllers\Backside\Member;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardMemberController extends Controller
{
    /**
     * display member dashboard page.
     *
     * @return View
     */
    public function dashboardAdminView(): View
    {
        return view('backside.pages.member.dashboard');
    }
}
