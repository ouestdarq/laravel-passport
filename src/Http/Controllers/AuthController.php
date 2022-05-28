<?php

namespace WincOops\PassportPkce\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use WincOops\PassportPkce\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {

        $request->validate([
            $this->username() => [
                'required',
                'string',
            ],
            'password' => [
                'required',
                'string',
            ]
        ]);

        if ($this->attemptLogin($request)) {
            return redirect()->intended();
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        // $this->incrementLoginAttempts($request);

        return throw ValidationException::withMessages([
            $this->username() => [
                __('auth.failed'),
            ],
        ]);;
    }

    public function logout(Request $request)
    {
        request()->user()->token()->revoke();
        return response()->noContent();
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return auth()->guard()->attempt(
            $this->credentials($request),
            $request->filled('remember')
        );
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }
}