<?php


namespace HDESDK\Tickets;

use HDESDK\Requests;

class Ticket extends Requests\Requests
{
    public $answer;

    public function TicketCreate($options){
        $this->answer = Requests\Requests::SetRequest('TicketCreate',$options);
        return  $this->answer;
    }

    public function TicketUpdate($options){
        $this->answer = Requests\Requests::SetRequest('TicketUpdate',$options);
        return  $this->answer;
    }

    public function TicketGet($options){
        $this->answer = Requests\Requests::SetRequest('TicketGet',$options);
        return  $this->answer;
    }

    public function TicketsGet($options){
        $this->answer = Requests\Requests::SetRequest('TicketsGet',$options);
        return  $this->answer;
    }

    public function TicketDelete($options){
        $this->answer = Requests\Requests::SetRequest('TicketDelete',$options);
        return  $this->answer;
    }

    public function TicketAnswersGet($options){
        $this->answer = Requests\Requests::SetRequest('TicketAnswersGet',$options);
        return  $this->answer;
    }

    public function TicketAnswerSet($options){
        $this->answer = Requests\Requests::SetRequest('TicketAnswerSet',$options);
        return  $this->answer;
    }

    public function TicketAnswerUpdate($options){
        $this->answer = Requests\Requests::SetRequest('TicketAnswerUpdate',$options);
        return  $this->answer;
    }

    public function TicketAnswerDelete($options){
        $this->answer = Requests\Requests::SetRequest('TicketAnswerDelete',$options);
        return  $this->answer;
    }

}