<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;

use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\EmailSender;

class YahooSender extends  EmailSender {

    public function login($user ,$password){
        printf("Login to Yahoo with %s and %s \n", $user, $password);
    }

    public function logout(){
        printf("Logout from yahoo\n");
    }
}