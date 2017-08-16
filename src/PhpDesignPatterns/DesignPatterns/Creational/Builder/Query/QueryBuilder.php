<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder\Query;

/**
 * Class QueryBuilder
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class QueryBuilder implements QueryBuilderInterface
{

    /**
     * @var array
     */
    private $columnNames = ['*',];

    /**
     * @var string
     */
    private $tableName = '';

    /**
     * @var array
     */
    private $whereClauses = [];

    /**
     * @inheritDoc
     */
    public function select(array $columnNames = ['*',]): QueryBuilderInterface
    {
        $this->columnNames = $columnNames;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function from(string $tableName): QueryBuilderInterface
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function where(string $columnName, string $operator, string $expectedValue): QueryBuilderInterface
    {
        $hashOfWhereClause = md5($columnName . $operator . $expectedValue);

        // Only add where clauses that weren't already added.
        if (array_key_exists($hashOfWhereClause, $this->whereClauses)) {
            return $this;
        }

        $this->whereClauses[$hashOfWhereClause] = sprintf(
            'WHERE `%s` %s `%s`',
            $columnName,
            $operator,
            $expectedValue
        );

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSql(): string
    {
        $columnNames = implode('`, `', $this->columnNames);
        $whereClauses = implode(' AND ', $this->whereClauses);

        return sprintf(
            'SELECT `%s` FROM `%s`%s;',
            $columnNames,
            $this->tableName,
            strlen($whereClauses) > 0 ? ' ' . $whereClauses : ''
        );
    }

}
