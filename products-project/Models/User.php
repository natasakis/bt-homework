<?php

namespace Models\User;

use Models\Model\Model;

class User extends Model
{

    
    public $id;
    public $name;
    public $last_name;
    public $email;
    public $password;
    public $img;

    public function __construct($user)
    {
        $this->id = $user['id'];
        $this->name = $user['name'];
        $this->last_name = $user['last_name'];
        $this->email = $user['email'];
        $this->password = $user['password'];
        $this->img = $user['img'];
    }

    public static function getAllUsers()
    {
        parent::connection('users');
        $allUsers = [];
        if (self::$db_status) {
            foreach (parent::fetchAll() as $user) {
                $allUsers[] = new self($user);
            }
        }
        return $allUsers;
    }
    public static function getOneUserByEmail($email)
    {
        $users = self::getAllUsers();
        foreach ($users as $user) {
            if ($user->email == $email) {
                return $user;
            }
        }
    }

}
