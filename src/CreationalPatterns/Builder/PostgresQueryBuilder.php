<?php
namespace Mnaudry\Patterns\CreationalPatterns\Builder;

use Mnaudry\Patterns\CreationalPatterns\Builder\MYSQLQueryBuilder;

class PostgresQueryBuilder extends  MYSQLQueryBuilder {

    public function limit(int $row, ?int $offset): SQLQueryBuilder
    {
        parent::limit($offset,$row);

        $this->query->limit = " LIMIT $row".((!is_null($offset))?" OFFSET $offset":"");
    
        return $this;
    }
}