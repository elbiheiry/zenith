<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:site');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('site.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'code' => ['required' , 'string' , 'max:255'],
            'school_id' => ['required' , 'not_in:0'],
            'parent' => ['required' , 'string' , 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'grade' => ['required' , 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ] ,[] ,[
            'name' => locale() == 'en' ? 'Student name' : 'إسم الطالب',
            'phone' => locale() == 'en' ? 'Phone number' : 'رقم الهاتف',            
            'email' => locale() == 'en' ? 'Email address' : 'البريد الإلكتروني',
            'password' => locale() == 'en' ? 'Password' : 'الرقم السري',
            'code' => locale() == 'en' ? 'School code' : 'الكود المدرسي',
            'school_id' => locale() == 'en' ? 'School' : 'المدرسة',
            'parent' => locale() == 'en' ? 'Parent name' : 'إسم ولي الأمر',
            'grade' => locale() == 'en' ? 'Year grade' : 'السنة الدراسية'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'parent' => $data['parent'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        $user->childrens()->create([
            'name' => $data['name'],
            'code' => $data['code'],
            'school_id' => $data['school_id'],
            'grade' => $data['grade'],
        ]);

        return $user;
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('site');
    }
}
