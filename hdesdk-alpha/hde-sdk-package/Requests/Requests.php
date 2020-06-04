<?php


namespace HDESDK\Requests;

class Requests
{
    public $requests_array;
    public $request_type;
    public $option_string;
    private $request_config;

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



    public function SetRequest($request_type, $options){

        $this->request_type = self::RequestTypeConfig($request_type);
        $this->option_string = self::SetOptions($options, $this->request_type['method']);


        switch ($this->request_type['method']) {
            case 'GET':
            case 'DELETE':
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => $this->domen."/api/v2".$this->request_type['url'],
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => $this->request_type['method'],
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: Basic ".$this->auth_token,
                        "Content-Type: application/x-www-form-urlencoded",
                        "Cache-Control: no-cache"
                    ),
                ));
                $response = curl_exec($curl);

                curl_close($curl);
                break;

            case 'POST':
            case 'PUT':
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => $this->domen."/api/v2".$this->request_type['url'].$this->option_string,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => $this->request_type['method'],
                    CURLOPT_POSTFIELDS => $this->option_string,
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: Basic ".$this->auth_token,
                        "Content-Type: application/x-www-form-urlencoded",
                        "Cache-Control: no-cache"
                    ),
                ));

                break;

        }
        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

    private function SetOptions($options, $method){

        switch ($method) {
            case 'GET':
                $this->option_string= '?';
                foreach ($options as $key=>$value){
                    $this->option_string .= $key.'='.urlencode($value).'&';
                }
                break;

            case 'POST':
                foreach ($options as $key=>$value){
                    $this->option_string .= $key.'='.urlencode($value).'&';
                }
                break;

            case 'PUT':
                    $this->option_string = json_encode($options);
                break;
        }

        return $this->option_string;
    }

    private function PostOptions($options){
        foreach ($options as $key=>$value){
            $this->option_string .= $key.'='.urlencode($value).'&';
        }

        return $this->option_string;
    }

    private function RequestTypeConfig($request_type){
        $this->request_config = array(
            'DepartmentListGet' => array(
                'method' => 'GET',
                'url'    => '/departments/'
            ),

            'TicketCreate' => array(
                'method' => 'POST',
                'url'    => '/tickets/'
            ),

            'TicketUpdate' => array(
                'method' => 'PUT',
                'url'    => '/tickets/{1}',
            ),

            'TicketGet' => array(
                'method' => 'GET',
                'url'    => '/tickets/{1}'
            ),

            'TicketsGet' => array(
                'method' => 'GET',
                'url'    => '/tickets/'
            ),

            'TicketDelete' => array(
                'method' => 'DELETE',
                'url'    => '/tickets/{1}'
            ),

            'TicketAnswersGet' => array(
                'method' => 'GET',
                'url'    => '/tickets/{1}/posts/'
            ),

            'TicketAnswerSet' => array(
                'method' => 'POST',
                'url'    => '/tickets/{1}/posts/'
            ),

            'TicketAnswerUpdate' => array(
                'method' => 'PUT',
                'url'    => '/tickets/{1}/posts/{2}'
            ),

            'TicketAnswerDelete' => array(
                'method' => 'DELETE',
                'url'    => '/tickets/{1}/posts/{2}'
            ),

            'CommentsGet' => array(
                'method' => 'GET',
                'url'    => '/tickets/{1}/comments/'
            ),

            'CommentCreate' => array(
                'method' => 'POST',
                'url'    => '/tickets/{1}/comments/'
            ),

            'CommentUpdate' => array(
                'method' => 'PUT',
                'url'    => '/tickets/{1}/comments/{2}'
            ),

            'CommentDelete' => array(
                'method' => 'DELETE',
                'url'    => '/tickets/{1}/comments/{2}'
            ),

            'UserListGet' => array(
                'method' => 'GET',
                'url'    => '/users/'
            ),

            'UserGet' => array(
                'method' => 'GET',
                'url'    => '/users/{1}'
            ),

            'UserCreate' => array(
                'method' => 'POST',
                'url'    => '/users/'
            ),

            'UserUpdate' => array(
                'method' => 'PUT',
                'url'    => '/users/{1}'
            ),

            'UserDelete' => array(
                'method' => 'DELETE',
                'url'    => '/users/{1}'
            )
        );
    }


}