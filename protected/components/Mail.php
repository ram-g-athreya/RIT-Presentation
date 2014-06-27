<?php

require 'mailgun/vendor/autoload.php';

use Mailgun\Mailgun;

class Mail {

    public function __construct($options) {
        $mg = new Mailgun("key-6o5zcm4n79dozrntjmdml5d2acmch-c0");
        $domain = "stocks.com";
        $mg->sendMessage($domain, array(
            'from' => 'no-reply@stocks.com',
            'to' => $options['to'],
            'subject' => $options['subject'],
            'html' => $options['html']
        ));
    }

}

?>
