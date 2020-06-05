<?php


namespace HDESDK\Comment;


use HDESDK\Requests;

class Comment extends Requests\Requests
{
    public $answer;

    public function CommentsGet($options){
        $this->answer = Requests\Requests::SetRequest('CommentsGet',$options);
        return  $this->answer;
    }

    public function CommentCreate($options){
        $this->answer = Requests\Requests::SetRequest('CommentCreate',$options);
        return  $this->answer;
    }

    public function CommentUpdate($options){
        $this->answer = Requests\Requests::SetRequest('CommentUpdate',$options);
        return  $this->answer;
    }

    public function CommentDelete($options){
        $this->answer = Requests\Requests::SetRequest('CommentDelete',$options);
        return  $this->answer;
    }
}