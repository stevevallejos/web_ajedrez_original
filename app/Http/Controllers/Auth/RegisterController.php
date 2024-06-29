<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
    
        
        if (asset($data['foto']) && $data['foto'] instanceof UploadedFile) {
            $foto = $data['foto'];
            $fotoPhat = $foto->store('foto', 'public');
        }
        dd($data);

        $user = new User();
        $user->name = $data['name'];
        $user->password = Hash::make($data['password']);
        $user->email = $data['email'];
        $user->foto = $data['foto'];
        $imagen=file($data["foto"]);
        $nombreArchivo="foto.jpg";
        if (isset($data['foto']) && $data['foto']->isValid()) {
            // Generar un nombre único para la imagen
            $nombreImagen = time().'.'.$data['foto']->getClientOriginalExtension();
    
            // Guardar la imagen usando Storage (opcional)
            Storage::disk('public')->putFileAs('imagenes', $data['foto'], $nombreImagen);
    
          
    
            // Asignar el nombre de archivo a la propiedad 'foto' del usuario
            $user->foto = $nombreImagen;
        }
        
        $user->save();  
        return $user;
    }


}
