<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\UserModel;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function login(Request $request)
    {
       
        $email = $request->email;
        $password = $request->password;
    

        try
        {
            $email = UserModel::getUser($email, $password);

        }
        catch(Exception $exception)
        {
            return view('cuenta.login', ['msgErr'=>'Correo o contraseña incorrecto']);
            
        }
        
        $value = 'Usuario';

        if ($email != '')
        {
            $value = $email;
        }
        $request->session()->flush();
        $request->session()->put('authenticated', $value);
        return redirect()->route('panel');
        
    }

    public function RegistrarUser(Request $request)
    {
        $user = $request->user;
        $email = $request->email;
        $password = $request->password;

        try
        {
            $email = UserModel::RegistrarUser($user, $email, $password);
            if ($email->uid != '') {
                return view('admin.panel', ['msg'=>'¡Registro exitoso!']);
            }else{
                return "Hubo un error";
            }
        }
        catch(Exception $exception)
        {
            return $exception;
            
        }
    }
}
