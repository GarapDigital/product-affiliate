<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CheckoutFormController extends Controller
{
    /**
     * display checkout form page.
     *
     * @return View
     */
    public function checkoutFormView(): View
    {
        return view('affiliate.show-checkout-form');
    }
}
