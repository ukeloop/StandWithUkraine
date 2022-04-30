<?php

namespace Ukeloop\StandWithUkraine\Test;

use Illuminate\Console\OutputStyle;
use Mockery;
use ReflectionClass;
use Ukeloop\StandWithUkraine\StandWithUkraineServiceProvider;

/**
 * @internal
 * @coversNothing
 */
final class StandWithUkraineServiceProviderTest extends TestCase
{
    public function testWriteMessage(): void
    {
        $provider = new StandWithUkraineServiceProvider($this->app);

        $methodName = 'writeMessage';

        $reflection = new ReflectionClass($provider);

        $method = $reflection->getMethod($methodName);

        $method->setAccessible(true);

        $mock = Mockery::mock(OutputStyle::class);

        $mock
            ->shouldReceive('writeln')
            ->with('<bg=blue>#StandWith</><bg=yellow>Ukraine</>')
            ->once()
        ;

        $method->invokeArgs($provider, [$mock]);
    }
}
