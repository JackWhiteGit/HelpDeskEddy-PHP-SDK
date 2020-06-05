<?php


namespace HDESDK\User;

use HDESDK\Requests;

class User extends Requests\Requests
{
    public $answer;

    public function UserListGet($options){
        $this->answer = Requests\Requests::SetRequest('UserListGet',$options);
        return  $this->answer;
    }

    public function UserGet($options){
        $this->answer = Requests\Requests::SetRequest('UserGet',$options);
        return  $this->answer;
    }

    public function UserCreate($options){
        $this->answer = Requests\Requests::SetRequest('UserCreate',$options);
        return  $this->answer;
    }

    public function UserUpdate($options){
        $this->answer = Requests\Requests::SetRequest('UserUpdate',$options);
        return  $this->answer;
    }

    public function UserDelete($options){
        $this->answer = Requests\Requests::SetRequest('UserDelete',$options);
        return  $this->answer;
    }
}