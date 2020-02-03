<?php
declare(strict_types=1);

namespace Nora\Db;

use PHPUnit\Framework\TestCase;
use Nora\Framework\Bootstrap;
use NoraDbFake\Kernel\Kernel;

class DbTest extends TestCase
{
    /**
     * @test
     */
    public function モジュールの呼び出し()
    {
        $kernel = (new Bootstrap)('NoraDbFake', 'app-test');

        $this->assertInstanceOf(Kernel::class, $kernel);
        return $kernel;
    }
}
