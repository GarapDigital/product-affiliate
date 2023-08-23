<?php

namespace App\Http\Controllers\Backside\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CustomerAdminContactController extends Controller
{
    /**
     * display customer contact admin page.
     *
     * @return View
     */
    public function customerContactAdminView(): View
    {
        return view('backside.pages.customer.admin-contact-view');
    }
}
