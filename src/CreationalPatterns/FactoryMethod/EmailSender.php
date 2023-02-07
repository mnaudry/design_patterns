<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;

class  EmailSender {

    public function login($user,$password) {

    }
    public function send($dest,$message){

        printf("Sending messaage to %s : %s\n",$dest, $message);
    }
    public function logout(){

    }
}