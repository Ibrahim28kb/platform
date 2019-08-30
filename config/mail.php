<?php

return [
    "driver" => "smtp",
    "host" => "smtp.mailtrap.io",
    "port" => 2525,
    "from" => array(
        "address" => "from@example.com",
        "name" => "Example"
    ),
    "username" => "655b6dae3651db",
    "password" => "a2e66a85920646",
    "sendmail" => "/usr/sbin/sendmail -bs"
  ];


// return [

  

//     'driver' => env('MAIL_DRIVER', 'smtp'),

  

//     'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

     

//     'port' => env('MAIL_PORT', 587),

    

//     'from' => [
//         'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
//         'name' => env('MAIL_FROM_NAME', 'Example'),
//     ],

    

//     'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    

//     'username' => env('bbde24850aa0c7'),

//     'password' => env('e546bdf6dc3449'),

     

//     'sendmail' => '/usr/sbin/sendmail -bs',

   

//     'markdown' => [
//         'theme' => 'default',

//         'paths' => [
//             resource_path('views/vendor/mail'),
//         ],
//     ],

     

//     'log_channel' => env('MAIL_LOG_CHANNEL'),

// ];
