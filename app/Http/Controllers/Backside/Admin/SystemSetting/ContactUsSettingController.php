<?php

namespace App\Http\Controllers\Backside\Admin\SystemSetting;

use App\Action\ContactSetting\UpdateContactSettingConfig;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactSetting\UpdateContactSettingRequest;
use App\Models\SettingContact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
        $contact_setting = SettingContact::first();

        return view('backside.pages.admin.system-setting.contact-us-setting.index', compact('contact_setting'));
    }

    /**
     * do update contact setting configuration.
     *
     * @return RedirectResponse
     */
    public function updateContactSettingConfig(UpdateContactSettingRequest $request): RedirectResponse
    {
        $contact_setting = SettingContact::first();
        $data = $request->validated();
        $data['setting_contact_id'] = $contact_setting->id;

        $update_contact_setting_action = (new UpdateContactSettingConfig($data))->execute();

        return redirect()->back()->with('success', $update_contact_setting_action->message);
    }
}
