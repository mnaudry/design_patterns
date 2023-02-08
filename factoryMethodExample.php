<?php
require_once __DIR__."/vendor/autoload.php";

use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\PageCreator;
use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\Pdf;
use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\PdfCreator;
use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\TextCreator;

use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\EmailSenderGmail;
use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\EmailSenderYahoo;
use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\EmailSenderConnector;
/**
 *  create .text and .pdf class using Factory Method Desgin pattern
 */

function create(PageCreator $creator, $data) {
    $creator->create($data);
 }

function sendMessage(EmailSenderConnector $email,$user,$password,$dest,$messages){

   $email->sendEmail($user,$password,$dest,$messages);

}

$data = <<< DATA
I come to see you in spring beautifull day.
DATA;

//pdf
create(new PdfCreator(),$data);
//text
create(new TextCreator(),$data);

$messages = array(
"Hello how are you doing",
"it's okay to stay at home sometimes",
"Always up for something new",
"I will go to see my mother this sunday",
"this position fit me weell"
);

$dest = "mohamed@gmail.com";

//gmail
sendMessage(new EmailSenderGmail(),"zuri@gmail.com","yetu",$dest,$messages);





