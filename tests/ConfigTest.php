<?php

namespace jinowom\Supports\Tests;

use jinowom\Supports\Collection;
use jinowom\Supports\Config;

class ConfigTest extends TestCase
{
    public function testBootstrap()
    {
        $config = [];

        self::assertInstanceOf(Collection::class, new Config($config));
    }
}
