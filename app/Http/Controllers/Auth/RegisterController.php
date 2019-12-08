<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
    protected $redirectTo ;//= '/acceuil';
    public function redirectTo()
    {
        switch(Auth::user()->type){
            case 'C':
            $this->redirectTo = '/candidats';
            return $this->redirectTo;
                break;
            case 'R':
                $this->redirectTo = '/recruteurs';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                //$this->logout();
                return $this->redirectTo;
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'type' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'type' => $data['type'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    // public function candidatCreate(Request $request, $id) {
    //   // $candidat = new Candidat();
    //   // $candidat->accountId
    //   // $candidat->nom = $data['nom'];
    //   // $candidat->prenom = $data['prenom'];
    //   // $candidat->email = $data['email'];
    // }
}
