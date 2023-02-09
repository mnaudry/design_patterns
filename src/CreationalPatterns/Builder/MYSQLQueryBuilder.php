<?php
namespace Mnaudry\Patterns\CreationalPatterns\Builder;

use Mnaudry\Patterns\CreationalPatterns\Builder\SQLQueryBuilder;
use Mnaudry\Patterns\CreationalPatterns\Builder\MYSQLQueryBuilderException;

class MYSQLQueryBuilder implements SQLQueryBuilder {

    protected $query;

    public function reset()
    {
        $this->query =  new \stdClass();
    }

    public function select(string $table, array $fields = []): SQLQueryBuilder
    {
        $this->query->type = "select";
        if(empty($fields)){
            $this->query->base = "select * ";
        } else {
            $this->query->base = "SELECT ".implode(",",$fields). " ";
        }
        $this->query->base .="FROM ".$table ;
        
        return $this;
 
    }

    public function limit(int $row , ?int $offset): SQLQueryBuilder
    {
        if($this->query->type != 'select'){
            throw new MYSQLQueryBuilderException("The query must be a select");
        }
        $this->query->limit ="LIMIT ".(!is_null($offset)?" $offset, ":"").$row;

        return $this;
    }

    public function where(string $field, mixed $value, string $operator = '='): SQLQueryBuilder
    {
       if($this->candDoWhere()){
         $this->query->where[] = " $field $operator $value ";
       }
       
       return $this;
    }

    public function OrWhere(string $field , mixed $value, string $operator = '=') : SQLQueryBuilder
    {

        if($this->candDoWhere()){
            $this->query->OrWhere[] = " $field $operator $value ";
          }
          
          return $this;
    }
    public function NotWhere(string $field , mixed $value, string $operator = '=') : SQLQueryBuilder
    {

        if($this->candDoWhere()){
            $this->query->NotWhere[] = " $field $operator $value ";
          }
          
          return $this;
    }

    private function candDoWhere() : bool {
        if(!in_array($this->query->type ,['select','update','delete'])){
            throw new MYSQLQueryBuilderException("The query must be a select , update or delete");
        }

        return true ;
    }

    public function getSQL(): string
    {
      $query = $this->query;
      $sql = $query->base;
      if(!empty($query->where)){
        $sql.=" WHERE";
        $sql.= implode(" AND ", $query->where);
      }

      if(!empty($query->OrWhere)){
        if(empty($query->where)){
            $sql.=" WHERE";
        } else {
            
            $sql.=" OR ";
        }
        $sql.= implode(" OR ", $query->OrWhere);
      }

      if(!empty($query->NotWhere)){
        if(empty($query->where) && empty($query->OrWhere) ){
            $sql.=" WHERE";
        }
        else {
            $sql.=" NOT ";
        }
        $sql.= implode(" NOT ", $query->NotWhere);
      }
       
      if(isset($query->limit)){
        $sql .=$query->limit;
      }

      $sql .= ";";

      return $sql;
    }
}