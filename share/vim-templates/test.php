<?php
declare(strict_types=1);

namespace Nora\Db;

use PHPUnit\Framework\TestCase;

class DbTest extends TestCase
{
    public function testIsTrue()
    {
        $this->assertInstanceOf(Db::class, new Db());
    }
}
