<?php 

namespace App\Services;
use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter {

    protected $mailchimpApiKey;
    protected $mailchimpServer;
    protected $client;

    public function __construct(ApiClient $client)
    {   
        $this->client = $client;
        $this->mailchimpApiKey = config('services.mailchimp.key');    
        $this->mailchimpServer = config('services.mailchimp.server');    
    }

    public function subscribe(string $email  , string $list = null){
        
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember($list,[
            'email_address' => $email,
            'status' => 'subscribed'
        ]);

    }
}