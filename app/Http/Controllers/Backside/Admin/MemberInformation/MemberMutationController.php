<?php

namespace App\Http\Controllers\Backside\Admin\MemberInformation;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MemberMutationController extends Controller
{
    /**
     * display member mutation page.
     *
     * @param int $member_id
     * @return View
     */
    public function memberMutationView(): View
    {
        return view('backside.pages.admin.member-information.member-mutation');
    }
}
