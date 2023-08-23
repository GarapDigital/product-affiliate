<?php

namespace App\Http\Controllers\Backside\Admin\MemberInformation;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ManageMemberController extends Controller
{
    /**
     * display manage member page.
     *
     * @return View
     */
    public function indexMemberView(): View
    {
        return view('backside.pages.admin.member-information.index');
    }

    /**
     * display member edit form page.
     *
     * @param int $member_id
     * @return View
     */
    public function editMemberView($member_id): View
    {
        return view('backside.pages.admin.member-information.edit');
    }
}
