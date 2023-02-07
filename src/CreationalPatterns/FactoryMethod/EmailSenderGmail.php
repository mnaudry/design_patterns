<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;

use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\EmailSenderConnector;
use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\GmailSender;

class  EmailSenderGmail extends  EmailSenderConnector {

    public function getEamilSender(){
        return new GmailSender();
    }

}