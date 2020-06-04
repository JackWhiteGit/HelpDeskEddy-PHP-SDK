<?php


namespace HDESDK\Auth;



class Auth
{
    public $user_email;
    private $apikey;
    public $domen;
    public $auth_token;

    public function SetAuthData($user_email, $apikey, $domen){
        $this->user_email = $user_email;
        $this->apikey = $apikey;
        $this->domen = $domen;

        $this->auth_token =  base64_encode($user_email.':'.$apikey);
        return $this->auth_token;

    }

    public function GetToken(){
        return $this->auth_token;
    }

    public function GetUserEmail(){
        return  $this->user_email;
    }

    public function GetDomenName(){
        return  $this->domen;
    }

}