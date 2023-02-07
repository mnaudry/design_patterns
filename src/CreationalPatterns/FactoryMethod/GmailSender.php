<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;

use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\EmailSender;

class GmailSender extends  EmailSender {

    public function login($user ,$password){
        printf("Login to Gmail with %s and %s \n", $user, $password);
    }

    public function logout(){
        printf("Logout from gmail \n");
    }
}