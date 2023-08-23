<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
}
