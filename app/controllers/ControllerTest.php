<?php
namespace controllers;

class ControllerTest extends ControllerBase {

    public function send(string $msg){
        echo $msg;
    }

    public function index()
    {
        echo "Hello world";
    }

    public function sendTo(string $message, ?string $to='World') {
        echo "To: {$to}<br>Message: {$message}";
    }

}

?>