HelpDeskEddy PHP SDK
==================

This page gives you the basic steps for getting up and running with the HelpDeskEddy SDK.

## The SDK has the following requirements:

Minimum PHP version: 5.3.0
cURL extension
JSON extension

## What is the HelpDeskEddy SDK?
The HelpDeskEddy SDK helps you add the following features to your app:

Show Knowledge Base content<br/>
Show available departments<br/>
Show/create/update:<br/>
tickets<br/>
users<br/>
ticket comments.

## What you need to get started
You need HelpDeskEddy account and apiKey for API access. 

## Getting up and running
Add the SDK to your project by composer and require_once method:
```php
//Package inclusion example

require_once __DIR__.'/vendor/autoload.php';
```
Add initialize SDK and call Auth method with your user data to use the SDK:

```php
//Initialisation
$test = new \HDESDK\SDKInit();

//User authorization
$test->Auth('example@example.com', 'your-api-key', 'https://example.helpdeskeddy.com');

```

Then you can call any needed method, like tiket create for example:

```php
// Request examples
$options = array(
    'title' => 'Problem with email',
    'description'      => '<p>Problem with email info@example.com</p>',
    'sla_date'         => '07.06.2020 00:00',
    'priority_id'      => 1,
    'user_email'       => 'example@example.com',
    'create_from_user' => 1
);

$test->TicketCreate($options); //ticket_create
```   
For more information You can visit [PHP SDK Documentation](http://eddyplugins.com/en/php-sdk) and official [HelpDeskEddy API Documentation](https://helpdeskeddy.ru/api.html)
