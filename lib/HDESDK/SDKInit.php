<?php

namespace HDESDK;

use HDESDK\Auth\Auth;
use HDESDK\Departments\Departments;
use HDESDK\Requests\Requests;
use HDESDK\User\User;
use HDESDK\Comment\Comment;
use HDESDK\Tickets\Ticket;


class SDKInit extends Requests
{
    public $token;
    public $answer;


    public function Auth($user_email, $apikey, $domen){
        $this->token = Auth::SetAuthData($user_email, $apikey, $domen);
        return $this->token;
    }

    public function GetToken(){
        return $this->token;
    }

    //------------------------------- Tickets Part ---------------------------------

    public function TicketCreate($options){
        $this->answer = Ticket::TicketCreate($options);
        return  $this->answer;
    }

    public function TicketUpdate($options){
        $this->answer = Ticket::TicketUpdate($options);
        return  $this->answer;
    }

    public function TicketGet($options){
        $this->answer = Ticket::TicketGet($options);
        return  $this->answer;
    }

    public function TicketsGet($options){
        $this->answer = Ticket::TicketsGet($options);
        return  $this->answer;
    }

    public function TicketDelete($options){
        $this->answer = Ticket::TicketDelete($options);
        return  $this->answer;
    }

    public function TicketAnswersGet($options){
        $this->answer = Ticket::TicketAnswersGet($options);
        return  $this->answer;
    }

    public function TicketAnswerSet($options){
        $this->answer = Ticket::TicketAnswerSet($options);
        return  $this->answer;
    }

    public function TicketAnswerUpdate($options){
        $this->answer = Ticket::TicketAnswerUpdate($options);
        return  $this->answer;
    }

    public function TicketAnswerDelete($options){
        $this->answer = Ticket::TicketAnswerDelete($options);
        return  $this->answer;
    }

    //------------------------------- /Tickets Part ---------------------------------

    //------------------------------- Comments Part ---------------------------------

    public function CommentsGet($options){
        $this->answer = Comment::CommentsGet($options);
        return $this->answer;
    }

    public function CommentCreate($options){
        $this->answer = Comment::CommentCreate($options);
        return $this->answer;
    }

    public function CommentUpdate($options){
        $this->answer = Comment::CommentUpdate($options);
        return $this->answer;
    }

    public function CommentDelete($options){
        $this->answer = Comment::CommentDelete($options);
        return $this->answer;
    }
    //------------------------------- /Comments Part ---------------------------------

    //------------------------------- Users Part ---------------------------------

    public function UserListGet($options){
        $this->answer = User::UserListGet($options);
        return  $this->answer;
    }

    public function UserGet($options){
        $this->answer = User::UserGet($options);
        return  $this->answer;
    }

    public function UserCreate($options){
        $this->answer = User::UserCreate($options);
        return  $this->answer;
    }

    public function UserUpdate($options){
        $this->answer = User::UserUpdate($options);
        return  $this->answer;
    }

    public function UserDelete($options){
        $this->answer = User::UserDelete($options);
        return  $this->answer;
    }

    //------------------------------- /Users Part ---------------------------------

    //------------------------------- Departments Part ----------------------------

    public function DepartmentListGet($options){
        $this->answer = Departments::SetRequest('DepartmentListGet',$options);
        return  $this->answer;
    }

    //------------------------------- /Departments Part ---------------------------

}