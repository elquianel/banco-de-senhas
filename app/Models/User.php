<?php

namespace App\Models;

use App\Database\Database;
use \PDO;

class User
{
    public $id;
    public $name;
    public $email = 'elquianel@gmail.com';
    public $password;

    public function register(){
        $this->name = "Elquiane Lima";
        $this->email = 'elquianel@gmail.com';
        $this->password = password_hash("123456", PASSWORD_DEFAULT);
        $obDatabase = new Database('users');
        $this->id = $obDatabase->insert([
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password
        ]);
    }

    public function edit(){
        $obDatabase = new Database('users');

        return $obDatabase->update($this->id, [
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password
        ]);
    }

    public function delete(){
        $obDatabase = new Database('users');
        return $obDatabase->delete('id = '.$this->id);
    }

    public static function getUsers($where = null, $order = null, $limit = null){
        $obDatabase = new Database('users');
        return $obDatabase->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS);
    }

    public static function getUser($id){
        $obDatabase = new Database('users');
        return $obDatabase->select(" id = $id")->fetchObject(self::class);
    }


}