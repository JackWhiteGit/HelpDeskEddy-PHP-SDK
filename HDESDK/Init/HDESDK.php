<?php

use HDESDK\Auth\Auth;
use HDESDK\Requests\Requests;
use HDESDK\Departments\Departments;
use HDESDK\Tickets\Ticket;
use HDESDK\Comment\Comment;
use HDESDK\User\User;

class HDESDK
{
    public $token;


    public function Auth($user_email, $apikey, $domen){
        $auth = new Auth();
        $this->token = $auth->SetAuthData($user_email, $apikey, $domen);
        return $this->token;
    }

    public function GetToken(){
        return $this->token;
    }

    public function UserGet($user_id){


    }



}