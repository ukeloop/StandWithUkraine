<?php

namespace Ukeloop\StandWithUkraine\Test;

use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Ukeloop\StandWithUkraine\StandWithUkraineServiceProvider;

/**
 * @internal
 * @coversNothing
 */
abstract class TestCase extends TestbenchTestCase
{
    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getPackageProviders($app): array
    {
        return [
            StandWithUkraineServiceProvider::class,
        ];
    }
}
