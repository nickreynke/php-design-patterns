<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder\Query;

/**
 * Interface QueryBuilderInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface QueryBuilderInterface
{

    /**
     * @param array $columnNames
     *
     * @return QueryBuilderInterface
     */
    public function select(array $columnNames = ['*',]): QueryBuilderInterface;

    /**
     * @param string $tableName
     *
     * @return QueryBuilderInterface
     */
    public function from(string $tableName): QueryBuilderInterface;

    /**
     * @param string $columnName The column name where to search.
     * @param string $operator The operator which compares the value.
     * @param string $expectedValue The expected value that is to find.
     *
     * @return QueryBuilderInterface
     */
    public function where(string $columnName, string $operator, string $expectedValue): QueryBuilderInterface;

    /**
     * Returns the SQL string that was built.
     *
     * @return string
     */
    public function getSql(): string;

}
