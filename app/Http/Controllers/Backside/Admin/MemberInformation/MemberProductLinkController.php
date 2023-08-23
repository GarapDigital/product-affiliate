<?php

namespace App\Http\Controllers\Backside\Admin\MemberInformation;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MemberProductLinkController extends Controller
{
    /**
     * display related member product links page.
     *
     * @param int $member_id
     * @return View
     */
    public function memberProductLinkView($member_id): View
    {
        return view('backside.pages.admin.member-information.product-link');
    }
}
