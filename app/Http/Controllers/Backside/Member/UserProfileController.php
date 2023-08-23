<?php

namespace App\Http\Controllers\Backside\Member;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * display user profile page.
     *
     * @return View
     */
    public function userProfileView(): View
    {
        return view('backside.pages.member.user-profile');
    }
}
