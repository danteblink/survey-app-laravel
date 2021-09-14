<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Input;
use Validator;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    // Ver a que usuario pertenece el codigo de confirmacion para activar la cuenta
    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        return redirect('auth/login')->with('message', 'Confirmación correcta, ahora puedes ingresar al sitio');
    }

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'perfil' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $confirmation_code = str_random(30);
        $email = $data['email'];
        $name = $data['name'];

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'perfil' => $data['perfil'],
            'password' => bcrypt($data['password']),
            'confirmation_code' => $confirmation_code
        ]);

         Mail::send('email.verify',['confirmation_code' => $confirmation_code], function($message) use ($email, $name) {
         $message->to($email, $name ) -> subject('Confirmacion de registro Red-Glico');
         });
         
         Mail::send('email.newUser',['confirmation_code' => $confirmation_code, 'name' => $name, 'email' => $email], function($message) {
         $message->to('cidc@uaem.mx', 'CIDC' ) -> subject('Nuevo miembro en la Red-Glico');
         });

        return $user;

    }

}