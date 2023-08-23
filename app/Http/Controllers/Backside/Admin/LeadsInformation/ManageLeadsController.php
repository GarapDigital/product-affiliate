<?php

namespace App\Http\Controllers\Backside\Admin\LeadsInformation;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ManageLeadsController extends Controller
{
    /**
     * display manage leads page.
     *
     * @return View
     */
    public function manageLeadsPage(): View
    {
        return view('backside.pages.admin.manage-leads.index');
    }
}
