<?php

namespace App\Http\Controllers\Backside\Member;

use App\Action\MemberProfile\UpdateMemberProfile;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberProfile\UpdateMemberProfileRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    /**
     * display user profile page.
     *
     * @return View
     */
    public function userProfileView(): View
    {
        $logged_member = User::with('userProfile')->where('id', Auth::user()->id)->first();

        return view('backside.pages.member.user-profile', compact('logged_member'));
    }

    /**
     * do update member profile action.
     *
     * @return RedirectResponse
     */
    public function updateUserProfile(UpdateMemberProfileRequest $request)
    {
        $logged_member = User::with('userProfile')->where('id', Auth::user()->id)->first();
        $data = $request->validated();
        $data['new_password'] = is_null($data['new_password']) ? $logged_member->password : Hash::make($data['new_password']);
        $data['authenticated_member_id'] = $logged_member->id;

        $update_profile_action = (new UpdateMemberProfile($data))->execute();

        return redirect()->back()->with('success', $update_profile_action->message);
    }
}
