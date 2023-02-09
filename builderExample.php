<?php
require_once __DIR__."/vendor/autoload.php";

use Mnaudry\Patterns\CreationalPatterns\Builder\SQLQueryBuilder;
use Mnaudry\Patterns\CreationalPatterns\Builder\MYSQLQueryBuilder;
use Mnaudry\Patterns\CreationalPatterns\Builder\PostgresQueryBuilder;



function buildQuery(SQLQueryBuilder $query){

    $query->reset();

    dump( $query->
       select('product',['name','description','createDate'])
       ->where('id',2,'=')
       ->where('product','banane','=')
       ->OrWhere('id',5,'<')
       ->OrWhere('id',10,'>')
       ->limit(4,5)
       ->getSQL());
    
}

buildQuery(new MYSQLQueryBuilder());
buildQuery(new PostgresQueryBuilder());


