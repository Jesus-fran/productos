<?php

namespace App\Services;

use Illuminate\Support\Str;
require '../vendor/autoload.php';
use Kreait\Firebase\Factory;

class FirebaseService
{
    private $firebase;
    private $db;

    public function __construct()
    {
        $this->firebase = (new Factory)->withServiceAccount('../key/sistemariego-70eeb-50b76aac9edd.json');
        $this->db = $this->firebase->createDatabase();
    }

    public function humedadPlanta($planta)
    {
        $reference = $this->db->getReference($planta.'/humedad');
        $hum  = $reference->getValue();
        return $hum;
    }

    public function luminosidadPlanta($planta)
    {
        $reference = $this->db->getReference($planta.'/luminosidad');
        $lum  = $reference->getValue();
        return $lum;
    }

    public function temperaturaPlanta($planta)
    {
        $reference = $this->db->getReference($planta.'/temperatura');
        $temp  = $reference->getValue();
        return $temp;
    }

    public function estadoSensor($sensor)
    {
        $reference = $this->db->getReference('sensores/'.$sensor);
        $sens = $reference->getValue();
        return $sens;
    }

    public function getIdUsers()
    {
        $reference = $this->db->getReference('users');
        $users = $reference->getValue();
        return $users;
    }

    public function addUser($email, $password, $displayName)
    {

        // return $email.$password.$displayName;

        $auth = $this->firebase->createAuth();
        $userProperties = [
            'email' => $email,
            'emailVerified' => false,
            'password' => $password,
            'displayName' => $displayName,
        ];
        return $auth->createUser($userProperties);
         
    }

    public function setNameUser($email)
    {
    
    $id_generated = Str::random(10);

    $user_new = [
        'email' => $email,
    ];

    $reference = $this->db->getReference('users/'.$id_generated)->set($user_new);
    return $reference;
         
    }

    public function signIn($email, $password)
    {
        $auth = $this->firebase->createAuth();
        $signInResult = $auth->signInWithEmailAndPassword($email, $password);
        $email = $signInResult->data()['email'];
        
        return $email;
    }
}