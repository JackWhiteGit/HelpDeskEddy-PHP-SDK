<?php


namespace HDESDK\KnowledgeBase;


use HDESDK\Requests;

class KnowledgeBase extends Requests\Requests
{

    public $answer;

    public function CategoriesListGet($options){
        $this->answer = Requests\Requests::SetRequest('CategoriesListGet',$options);
        return  $this->answer;
    }

    public function ArticlesListGet($options){
        $this->answer = Requests\Requests::SetRequest('ArticlesListGet',$options);
        return  $this->answer;
    }
}