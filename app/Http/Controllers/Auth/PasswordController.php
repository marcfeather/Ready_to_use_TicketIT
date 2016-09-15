<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get the response after a successful password reset and redirect to "/"
     *
     * @param  string  $response
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getResetSuccessResponse($response)
    {
        return redirect('/');
    }

    protected function getEmailSubject()
    {
        return isset($this->subject) ? $this->subject : '[Société] Réinitialisation mot de passe Espace Client';
    }

}
