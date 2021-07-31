<?php

namespace Netflix\Tests\Shared\Infrastructure\PhpUnit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Netflix\Shared\Domain\Bus\Command\Command;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations;

    public function dispatch(Command $command, callable $commandHandler)
    {
        $commandHandler($command);
    }
}
