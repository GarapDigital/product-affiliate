<?php

namespace App\Http\Controllers\Backside\Admin\MemberInformation;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        $members = User::where('role', 'member')->latest()->get();

        return view('backside.pages.admin.member-information.index', compact('members'));
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
