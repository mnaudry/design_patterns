<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;

use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\EmailSenderConnector;
use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\YahooSender;

class  EmailSenderYahoo extends  EmailSenderConnector {

    public function getEamilSender(){
        return new YahooSender();
    }

}