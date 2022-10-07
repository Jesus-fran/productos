<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class GetViewsController extends Controller
{
    public function ViewIndex()
    {
        return view('index');
    }

    public function ViewProducto()
    {
        return view('producto');
    }

    public function ViewGaleria()
    {
        return view('galeria');
    }

    
    public function ViewConocenos()
    {
        return view('conocenos');
    }

    public function ViewLogin()
    {
        return view('cuenta.login');        
    }

    public function ViewPanel(Request $request)
    {
        $email_act = $request->email_act;
        $pass_act = $request->pass_act;

        $id_users = UserModel::getIdUsers();
        $users = '';
        if ($id_users == null) {
            $users = 'No existen usuarios almacenados';
            return view('admin.panel', compact('users'));        
        }
        foreach ($id_users as $data) {
            $users .= "<li class=\"list-group-item\"><i class=\"bi bi-person\" style=\"margin: 10px\"></i>".$data['email']."</li>";
        }
        
        return view('admin.panel', compact('users', 'email_act', 'pass_act'));        
    }

    public function Logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
