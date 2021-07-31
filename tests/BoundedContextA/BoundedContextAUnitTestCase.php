<?php

declare(strict_types=1);

namespace Netflix\Tests\Backoffice\Movies;

use Mockery\MockInterface;
use Netflix\Backoffice\Movies\Domain\Repository\MovieRepository;
use Netflix\Tests\Shared\Infrastructure\PhpUnit\TestCase;

abstract class BoundedContextAUnitTestCase extends TestCase
{
    protected $repository;


    /**
     * @return MovieRepository|MockInterface
     */
    public function repository()
    {
        return $this->repository = $this->repository ?? $this->mock(MovieRepository::class);
    }
}
