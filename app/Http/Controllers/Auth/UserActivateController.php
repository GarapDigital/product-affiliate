<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserActivateController extends Controller
{
    /**
     * do some check with user activation.
     *
     * @return RedirectResponse
     */
    public function userActivation(Request $request)
    {
        $has_updated_or_not = false;

        $check_personal_access_token_if_exists = DB::table('personal_access_tokens')->where('token', $request->token)->first();

        if (!empty($check_personal_access_token_if_exists)) {
            $user = User::where('id', $request->user_id)->first();
            $user->update([
                'email_verified_at' => now(),
            ]);

            DB::delete("DELETE FROM personal_access_tokens WHERE id = ?", [$check_personal_access_token_if_exists->id]);

            $has_updated_or_not = true;
        }

        return ($has_updated_or_not)
            ? redirect()->route('auth.login-view')->with('success', 'User Successfully Activated')
            : redirect()->route('auth.login-view')->with('fail', 'Contact Admin For Your Best Solutions');
    }
}
