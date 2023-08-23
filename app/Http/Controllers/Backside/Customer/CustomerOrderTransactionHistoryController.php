<?php

namespace App\Http\Controllers\Backside\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CustomerOrderTransactionHistoryController extends Controller
{
    /**
     * display customer order transaction history page.
     *
     * @return View
     */
    public function customerOrderTransactionHistoryView(): View
    {
        return view('backside.pages.customer.order-transaction-history-view');
    }
}
