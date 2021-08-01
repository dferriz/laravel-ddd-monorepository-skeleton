<?php

declare(strict_types=1);

namespace Project\Tests\Backoffice\Movies;

use Mockery\MockInterface;
use Project\Backoffice\Movies\Domain\Repository\MovieRepository;
use Project\Tests\Shared\Infrastructure\PhpUnit\TestCase;

abstract class BoundedContextBUnitTestCase extends TestCase
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
