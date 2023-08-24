<?php

namespace App\Http\Controllers\Backside\Admin\LeadsInformation;

use App\Http\Controllers\Controller;
use App\Models\Lead;
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
        $leads = Lead::latest()->get();

        return view('backside.pages.admin.manage-leads.index', compact('leads'));
    }
}
