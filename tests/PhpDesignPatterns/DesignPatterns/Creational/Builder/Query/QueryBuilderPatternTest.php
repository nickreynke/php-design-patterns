<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Creational\Builder\Query;

use PhpDesignPatterns\DesignPatterns\Creational\Builder\Query\QueryBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Class QueryBuilderPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class QueryBuilderPatternTest extends TestCase
{

    public function testQueryBuilderPattern(): void
    {
        $queryBuilder = new QueryBuilder();

        $queryBuilder
            ->from('test')
            ->where('id', '=', '1')
            ->where('name', 'LIKE', 'John Doe');

        self::assertEquals(
            'SELECT `*` FROM `test` WHERE `id` = `1` AND `name` LIKE `John Doe`;',
            $queryBuilder->getSql()
        );
    }

}
