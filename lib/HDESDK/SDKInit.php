<?php

namespace HDESDK;

use HDESDK\Auth\Auth;
use HDESDK\Departments\Departments;
use HDESDK\Requests\Requests;
use HDESDK\User\User;
use HDESDK\Comment\Comment;
use HDESDK\Tickets\Ticket;

/**
 * Class SDKInit
 */
class SDKInit extends Requests
{
    public $token;
    public $answer;

    /**
     * Generates a new access token
     *
     * @param string $user_email
     * @param string $apikey
     * @param string $domen
     * @return string
     * @throws Auth
     */
    public function Auth($user_email, $apikey, $domen){
        $this->token = Auth::SetAuthData($user_email, $apikey, $domen);
        return $this->token;
    }

    /**
     * Get access token
     *
     * @return string
     * @throws Auth
     */
    public function GetToken(){
        return $this->token;
    }

    //------------------------------- Tickets Part ---------------------------------

    /**
     * Create new Ticket
     *
     * @param array $options
     * @return string
     * @throws Ticket
     */
    public function TicketCreate($options){
        $this->answer = Ticket::TicketCreate($options);
        return  $this->answer;
    }

    /**
     * Update Tickets data by ticket_id
     *
     * @param array $options
     * @return string
     * @throws Auth
     */
    public function TicketUpdate($options){
        $this->answer = Ticket::TicketUpdate($options);
        return  $this->answer;
    }

    /**
     * Get Ticket data by ticket_id
     *
     * @param array $options
     * @return string
     * @throws Ticket
     */
    public function TicketGet($options){
        $this->answer = Ticket::TicketGet($options);
        return  $this->answer;
    }

    /**
     * Get Tickets list
     *
     * @param array $options
     * @return string
     * @throws Ticket
     */
    public function TicketsGet($options){
        $this->answer = Ticket::TicketsGet($options);
        return  $this->answer;
    }

    /**
     * Delete Ticket by ticket_id
     *
     * @param array $options
     * @return string
     * @throws Ticket
     */
    public function TicketDelete($options){
        $this->answer = Ticket::TicketDelete($options);
        return  $this->answer;
    }

    /**
     * Get Ticket Answers history by ticket_id
     *
     * @param array $options
     * @return string
     * @throws Ticket
     */
    public function TicketAnswersGet($options){
        $this->answer = Ticket::TicketAnswersGet($options);
        return  $this->answer;
    }

    /**
     * Add new Answer to Ticket by ticket_id
     *
     * @param array $options
     * @return string
     * @throws Ticket
     */
    public function TicketAnswerSet($options){
        $this->answer = Ticket::TicketAnswerSet($options);
        return  $this->answer;
    }

    /**
     * Update Ticket Answer by ticket_id and answer id
     *
     * @param array $options
     * @return string
     * @throws Ticket
     */
    public function TicketAnswerUpdate($options){
        $this->answer = Ticket::TicketAnswerUpdate($options);
        return  $this->answer;
    }

    /**
     * Delete Ticket Answer by ticket_id and answer id
     *
     * @param array $options
     * @return string
     * @throws Ticket
     */
    public function TicketAnswerDelete($options){
        $this->answer = Ticket::TicketAnswerDelete($options);
        return  $this->answer;
    }

    //------------------------------- /Tickets Part ---------------------------------

    //------------------------------- Comments Part ---------------------------------

    /**
     * Get Comments list by ticket_id
     *
     * @param array $options
     * @return string
     * @throws Comment
     */
    public function CommentsGet($options){
        $this->answer = Comment::CommentsGet($options);
        return $this->answer;
    }

    /**
     * Add new Comment to Ticket by ticket_id
     *
     * @param array $options
     * @return string
     * @throws Comment
     */
    public function CommentCreate($options){
        $this->answer = Comment::CommentCreate($options);
        return $this->answer;
    }

    /**
     * Update Comments data by ticket_id and comment id
     *
     * @param array $options
     * @return string
     * @throws Comment
     */
    public function CommentUpdate($options){
        $this->answer = Comment::CommentUpdate($options);
        return $this->answer;
    }

    /**
     * Delete Comment by ticket_id and comment id
     *
     * @param array $options
     * @return string
     * @throws Comment
     */
    public function CommentDelete($options){
        $this->answer = Comment::CommentDelete($options);
        return $this->answer;
    }
    //------------------------------- /Comments Part ---------------------------------

    //------------------------------- Users Part ---------------------------------

    /**
     * Get Users list
     *
     * @param array $options
     * @return string
     * @throws User
     */
    public function UserListGet($options){
        $this->answer = User::UserListGet($options);
        return  $this->answer;
    }

    /**
     * Get User data by id
     *
     * @param array $options
     * @return string
     * @throws User
     */
    public function UserGet($options){
        $this->answer = User::UserGet($options);
        return  $this->answer;
    }

    /**
     * Add new User
     *
     * @param array $options
     * @return string
     * @throws User
     */
    public function UserCreate($options){
        $this->answer = User::UserCreate($options);
        return  $this->answer;
    }

    /**
     * Update User data by id
     *
     * @param array $options
     * @return string
     * @throws User
     */
    public function UserUpdate($options){
        $this->answer = User::UserUpdate($options);
        return  $this->answer;
    }

    /**
     * Delete User data by id
     *
     * @param array $options
     * @return string
     * @throws User
     */
    public function UserDelete($options){
        $this->answer = User::UserDelete($options);
        return  $this->answer;
    }

    //------------------------------- /Users Part ---------------------------------

    //------------------------------- Departments Part ----------------------------

    /**
     * Get Departments list
     *
     * @param array $options
     * @return string
     * @throws Departments
     */
    public function DepartmentListGet($options){
        $this->answer = Departments::DepartmentListGet('DepartmentListGet',$options);
        return  $this->answer;
    }

    //------------------------------- /Departments Part ---------------------------
}