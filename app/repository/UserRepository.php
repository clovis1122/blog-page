<?php

namespace App\repository;

/**
  * Provide the methods to retrieve or store some users
  * data on the database.
  */

use App\User as user;

class UserRepository
{

  public static function createUser($username,$email,$password){

    return user::create([

            'username' => $username,
            'email'=> $email,
            'password' => bcrypt($password)

            ]);
  }

}
