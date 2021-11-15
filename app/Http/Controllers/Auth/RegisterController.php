<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles registering admin users for the application and
    | redirecting them to dashboard screen.
    |
    */

    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    
    /**
     * Show registration form for admin.
     * This function will return the view for register page blade file.
     * 
    */
    public function showRegisterForm()
    {
        return view('admin.auth.register');
    }

    /**
     * Register user as admin.
     * This function will store the user as admin inside the database.
     * @var name - string
     * @var email - string 
     * @var password - string
     * 
     * redirect user to logic page after succesfull registration.
     * 
    */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:admins'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        dd($request->all());
        User::create($request->all());
        
        return redirect()->intended(route('client.index'));
    }
}
