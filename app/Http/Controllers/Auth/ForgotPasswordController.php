<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Hash;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showForgetPasswordForm()
    {
        return view('auth.forgetPassword');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
        $token = Str::random(64);
        FacadesDB::table('passwordreset')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        FacadesMail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset PAssword');
        });
        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token)
    {
        return view('auth.forgetPasswordLink', ['token' => $token]);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
        $updatePassword = FacadesDB::table('passwordreset')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();
        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid Token!');
        }
        $user = User::where('email', $request->email)
            ->update(['password' => FacadesHash::make($request->password)]);
        FacadesDB::table('passwordreset')->where(['email' => $request->email])->delete();
        return redirect('/login')->with('message', 'Your password has been changed!');
    }
}
