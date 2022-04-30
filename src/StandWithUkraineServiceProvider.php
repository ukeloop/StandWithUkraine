<?php

namespace Ukeloop\StandWithUkraine;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

class StandWithUkraineServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole() && !$this->app->runningUnitTests()) {
            $this->writeMessage(new ConsoleOutput());
        }
    }

    protected function writeMessage(OutputInterface $output): void
    {
        $output->writeln('<bg=blue>#StandWith</><bg=yellow>Ukraine</>');
    }
}
