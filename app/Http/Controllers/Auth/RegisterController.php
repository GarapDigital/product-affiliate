<?php

namespace App\Http\Controllers\Auth;

use App\Action\Register\RegisterFromSystem;
use App\Action\SendTokenAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterFromSystemRequest;
use App\Mail\RegisterNotificationMail;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /**
     * display member register page.
     *
     * @return View
     */
    public function memberRegisterView(): View
    {
        return view('auth.register-member');
    }

    /**
     * do register member from system action.
     *
     * @return RedirectResponse
     */
    public function memberRegisterAction(RegisterFromSystemRequest $request): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();
            $data['password'] = Hash::make($data['password']);
            $data['role'] = 'member';

            $register_action = (new RegisterFromSystem($data))->execute();

            $send_personal_access_token_action = (new SendTokenAction([
                'token_type' => 'user-activation',
                'token_name' => 'User Activation Token',
                'token_abilities' => 'This Token For Activation Purposes',
            ]))->execute();

            Mail::to($register_action->data->email)->send(new RegisterNotificationMail([
                'account_name' => $register_action->data->name,
                'account_email' => $register_action->data->email,
                'activation_url' => route('auth.user-activation', [
                    'token' => $send_personal_access_token_action->data['token'],
                    'user_id' => $register_action->data['id'],
                ]),
            ]));

            DB::commit();

            return redirect()->route('auth.login-view')->with('success', 'Check your email For User Activation');
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex->getMessage());
        }
    }

    /**
     * display customer register page.
     *
     * @return View
     */
    public function customerRegisterView(): View
    {
        return view('auth.register-customer');
    }

    /**
     * do register customer from system action.
     *
     * @return RedirectResponse
     */
    public function customerRegisterAction(RegisterFromSystemRequest $request): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();
            $data['password'] = Hash::make($data['password']);
            $data['role'] = 'customer';

            $register_action = (new RegisterFromSystem($data))->execute();

            $send_personal_access_token_action = (new SendTokenAction([
                'token_type' => 'user-activation',
                'token_name' => 'User Activation Token',
                'token_abilities' => 'This Token For Activation Purposes',
            ]))->execute();

            Mail::to($register_action->data->email)->send(new RegisterNotificationMail([
                'account_name' => $register_action->data->name,
                'account_email' => $register_action->data->email,
                'activation_url' => route('auth.user-activation', [
                    'token' => $send_personal_access_token_action->data['token'],
                    'user_id' => $register_action->data['id'],
                ]),
            ]));

            DB::commit();

            return redirect()->route('auth.login-view')->with('success', 'Check your email For User Activation');
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex->getMessage());
        }
    }
}
