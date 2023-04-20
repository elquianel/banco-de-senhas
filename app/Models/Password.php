<?php

namespace App\Models;

use App\Database\Database;
use \PDO;
use App\Helpers\CryptPass;


class Password 
{
    public $id;
    public $id_user;
    public $plataform;
    public $email;
    public $login;
    public $password;

    public function register(){
        // $this->password = 'Lost157482';
        $crypt = new CryptPass();
        $password = $crypt->encrypt($this->password);

        // $this->id_user = 1;
        // $this->plataform = 'Clickup pessoal';
        // $this->email = 'elquianelima23@gmail.com';
        // $this->login = '';
        $obDatabase = new Database('passwords');
        $this->id = $obDatabase->insert([
            "id_user" => $this->id_user,
            "plataform" => $this->plataform,
            "email" => $this->email,
            "login" => $this->login,
            "password" => $password
        ]);
    }

    public function edit(){
        $obDatabase = new Database('passwords');

        return $obDatabase->update($this->id, [
            "plataform" => $this->plataform,
            "login" => $this->login,
            "password" => $this->password
        ]);
    }

    public function delete(){
        $obDatabase = new Database('passwords');
        return $obDatabase->delete('id = '.$this->id);
    }

    public static function getPasswords($id_user){
        $obDatabase = new Database('passwords');
        return $obDatabase->select(" id_user = $id_user", " created_at ",null, " * ")->fetchAll(PDO::FETCH_CLASS);
    }

    public static function getPassword($id){
        $obDatabase = new Database('passwords');
        return $obDatabase->select(" id = $id", null,null, " * ")->fetchObject(self::class);
    }

    public static function getPassDecrypt($id){
        $obDatabase = new Database('passwords');
        $crypt = new CryptPass();
        $passwordCrypt = $obDatabase->select(" id = $id", null,null, "password")->fetchColumn(0);

        return $crypt->decrypt($passwordCrypt);
    }
}


