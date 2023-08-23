<?php

namespace App\Http\Controllers\Backside\Member\UserFinance;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ManageMemberMoneyController extends Controller
{
    /**
     * display member money page.
     *
     * @return View
     */
    public function memberMoneyView(): View
    {
        return view('backside.pages.member.my-money.index');
    }

    /**
     * display member mutation page.
     *
     * @param int $my_money_id
     * @return View
     */
    public function memberMoneyMutation($my_money_id): View
    {
        return view('backside.pages.member.my-money.member-mutation');
    }
}
