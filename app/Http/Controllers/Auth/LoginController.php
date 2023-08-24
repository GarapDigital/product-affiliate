<?php

namespace App\Http\Controllers\Auth;

use App\Action\Login\LoginWithSystem;
use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginFromSystemRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * display login view
     *
     * @return View
     */
    public function loginView(): View
    {
        return view('auth.login');
    }

    /**
     * do the authentication action.
     *
     * @return RedirectResponse
     */
    public function loginAction(LoginFromSystemRequest $request): RedirectResponse
    {
        $login_action = (new LoginWithSystem($request->validated()))->execute();

        if ($login_action->success) {
            $request->session()->regenerate();

            return redirect()->route(Auth::user()->role.'.dashboard')->with('success', 'Welcome to Dashboard');
        }

        return redirect()->back()->with('fail', 'Your credential doesnt match with our records');


    }
}
