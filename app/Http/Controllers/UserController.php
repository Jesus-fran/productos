<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisUserRequest;
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

    public function RegistrarUser(RegisUserRequest $request)
    {
        $user = $request->user;
        $email = $request->email;
        $password = $request->password;

        try
        {
            $email = UserModel::RegistrarUser($user, $email, $password);
            
            if ($email->uid != '') {
                
                $name = UserModel::addEmailUser($email->email);
                // return view('admin.panel', ['msg'=>'¡Registro exitoso!']);
                $email_act = 'Email: '.$email->email;
                $pass_act = 'Contraseña: '.$password;

                return redirect()->route('panel', ['email_act'=>$email_act, 'pass_act'=>$pass_act]);
            }else{
                return "Hubo un error";
            }
        }
        catch(Exception $exception)
        {
            $pos = strpos($exception, 'EMAIL_EXISTS');
            if ($pos === false ) {
            
                $pos = strpos($exception, 'least 6 characters');

                if ($pos === false) {
                    return view('admin.panel', ['msg_err'=>'¡Error al registrar el usuario!']); 
                }else{
                    return view('admin.panel', ['msg_err'=>'¡Contraseña muy corta, deben ser al menos 6 caracteres!']);         
                }

            }else{
                return view('admin.panel', ['msg_err'=>'¡Ya existe este correo!']);         
                
            }
            // return $exception;
            return view('admin.panel', ['msg_err'=>'¡Error al registrar el usuario!']);         
        }
    }

    public function RegistrarNameUser($email)
    {
        $name = UserModel::addEmailUser($email);
        return $name;
    }
}
