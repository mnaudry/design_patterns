<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;

abstract class EmailSenderConnector {

    public abstract function getEamilSender();

    public function sendEmail($user , $password, $dest, $messages = []){
        $email = $this->getEamilSender();
        $email->login($user,$password);
        array_walk($messages,function($messaage) use ($email,$dest) {
            $email->send($dest,$messaage);
        });
        $email->logout();
    }
}