<?php


namespace HDESDK\Tickets;

use HDESDK\Auth;
use HDESDK\Requests;

class Ticket extends Requests\Requests
{
    public $auth_token;

    public function SetAuthToken($auth_token){
        $this->auth_token=$auth_token;
    }

    public function TicketCreate(){


    }

    public function TicketUpdate(){

    }

    public function TicketGet(){


    }

    public function TicketsGet(){

    }

    public function TicketDelete(){

    }

    public function TicketAnswersGet(){

    }

    public function TicketAnswerSet(){

    }

    public function TicketAnswerUpdate(){

    }

    public function TicketAnswerDelete(){

    }

}