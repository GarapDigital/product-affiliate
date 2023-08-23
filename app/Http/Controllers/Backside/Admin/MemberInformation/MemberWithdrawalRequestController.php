<?php

namespace App\Http\Controllers\Backside\Admin\MemberInformation;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MemberWithdrawalRequestController extends Controller
{
    /**
     * display member withdrawal request page.
     *
     * @return View
     */
    public function memberWithdrawalRequestView(): View
    {
        return view('backside.pages.admin.member-information.withdrawal-request');
    }
}
