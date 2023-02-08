<?php
namespace Mnaudry\Patterns\CreationalPatterns\Builder;

interface SQLQueryBuilder {
    public function select(string $table,  array $fields = []): SQLQueryBuilder;
    public function where(string $field , mixed $value, string $operator = '=') : SQLQueryBuilder;
    public function OrWhere(string $field , mixed $value, string $operator = '=') : SQLQueryBuilder;
    public function NotWhere(string $field , mixed $value, string $operator = '=') : SQLQueryBuilder;
    public function limit(int $start, int $offset) : SQLQueryBuilder;
    public function getSQL() :string ;
}