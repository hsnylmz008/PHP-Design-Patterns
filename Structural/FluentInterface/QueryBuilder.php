<?php

namespace Structural\FluentInterface;
class QueryBuilder
{
    /**
     * @var string
     */
    private string $query = "";

    /**
     * @param array $fields
     * @return $this
     */
    public function select(array $fields = []): QueryBuilder
    {
        $this->query .= sprintf("SELECT %s ", sizeof($fields) ? implode(", ", $fields) : "*");

        return $this;
    }

    /**
     * @param string $tableName
     * @return $this
     */
    public function from(string $tableName): QueryBuilder
    {
        $this->query .= " FROM {$tableName} ";

        return $this;
    }

    /**
     * @param array $conditions
     * @return $this
     */
    public function where(array $conditions): QueryBuilder
    {
        $this->query .= sprintf("WHERE %s ", implode(" AND ", $conditions));

        return $this;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function offset(int $offset): QueryBuilder
    {
        $this->query .= "OFFSET {$offset} ";

        return $this;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function limit(int $limit): QueryBuilder
    {
        $this->query .= "LIMIT {$limit} ";

        return $this;
    }

    /**
     * @param string $orderRule
     * @return $this
     */
    public function orderBy(string $orderRule): QueryBuilder
    {
        $this->query .= "ORDER BY {$orderRule} ";

        return $this;
    }

    /**
     * @return string
     */
    public function getQuery() : string
    {
        return $this->query;
    }
}