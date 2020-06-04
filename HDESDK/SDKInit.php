<?php

namespace HDESDK;

use HDESDK\Requests\Requests;

class SDKInit extends Requests
{
    public $token;


    public function Auth($user_email, $apikey, $domen){
        $this->token = Requests::SetAuthData($user_email, $apikey, $domen);
        return $this->token;
    }

    public function GetToken(){
        return $this->token;
    }

    public function UserGet($user_id){


    }
}