<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\SchoolRepository;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    public $schoolRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SchoolRepository $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
        $this->middleware('guest:site')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        $schools = $this->schoolRepository->list();

        return view('site.auth.login' , compact('schools'));
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string|min:8',
        ] ,[

        ],[
            $this->username() => locale() == 'en' ? 'Email' : 'البريد الإلكتروني',
            'password' => locale() == 'en' ? 'Password' :'الرقم السري '
        ]);
    }


    public function logout(Request $request)
    {
       $this->guard()->logout();
       return redirect('/');    
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('site');
    }
}
