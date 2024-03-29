<?php

namespace App\Models;

use App\Services\FirebaseService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    private $email;
    private $displayName;
    private static $service;

    public function __construct($email, $displayName)
    {
        $this->email = $email;
        $this->displayName = $displayName;
    }


    public static function getUser($email, $password)
    {
        $service = new FirebaseService();
        $result = $service->signIn($email, $password);
        return $result;
    }

    public static function registrarUSer($user, $email, $password)
    {
        $service = new FirebaseService();
        $result = $service->addUser($email, $password, $user);
        return $result;
    }

    public static function getIdUsers()
    {
        $service = new FirebaseService();
        $result = $service->getIdUsers();
        return $result;
    }

    public static function addEmailUser($email)
    {
        $service = new FirebaseService();
        $result = $service->setNameUser($email);
        return $result;
    }
}
