<?php


namespace HDESDK\Departments;

use HDESDK\Requests;

class Departments extends Requests\Requests
{
    public $answer;

    public function DepartmentListGet($options){
        $this->answer = Requests\Requests::SetRequest('DepartmentListGet',$options);
        return  $this->answer;
    }

}