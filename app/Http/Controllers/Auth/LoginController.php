<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles registering admin users for the application and
    | redirecting them to dashboard screen.
    |
    */

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    
    /**
     * Show login form for admin.
     * This function will return the view for login page blade file.
     * 
    */
    public function showLoginForm()
    {
        return view('client.auth.login');
    }

    /**
     * Login user as admin.
     * This function will verify the credentials and allow the user to access the admin dashboard.
     * @var email - string 
     * @var password - string
     * 
     * redirect user to dashboard page after succesfull login.
     * 
    */
    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:50'],
            'password' => ['required', 'string'],
        ]);


        // create our user data for the authentication
        $data = array(
            'email'     => $request->email,
            'password'  => $request->password
        );

        // attempt to do the login
        if (Auth::guard('admin')->attempt($data)) {
            
            // validation and authentication successful!
            return redirect()->intended(route('client.index'));

        } else {        
            
            Session::flash('error','Login Failed: Your user ID or password is incorrect');
            // validation not successful, send back to form 
            return redirect()->back()->withInput($request->only('email','remember'));
        }
       
    }

}
