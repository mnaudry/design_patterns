<?php
require_once __DIR__."/vendor/autoload.php";

use Mnaudry\Patterns\CreationalPatterns\Builder\MYSQLQueryBuilder;

$query = new MYSQLQueryBuilder();

$query->reset();

$sql = $query->
       select('product',['name','description','createDate'])
       ->where('id',2,'=')
       ->where('product','banane','=')
       ->OrWhere('id',5,'<')
       ->OrWhere('id',10,'>')
       ->OrWhere('description',10,'')
       ->getSQL();

dump($sql);

