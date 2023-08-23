<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    /**
     * display related product page.
     *
     * @return View
     */
    public function showRelatedProductView(): View
    {
        return view('affiliate.show-product');
    }
}
