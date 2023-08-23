<?php

namespace App\Http\Controllers\Backside\Admin\SystemSetting;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactUsSettingController extends Controller
{
    /**
     * display update contact us page.
     *
     * @return View
     */
    public function contactUsSettingView(): View
    {
        return view('backside.pages.admin.system-setting.contact-us-setting.index');
    }
}
