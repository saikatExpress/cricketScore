<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CacheCommands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run route:cache, view:clear, and view:cache commands';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('route:cache');
        $this->info('Route cache cleared and cached successfully.');

        $this->call('view:clear');
        $this->info('Compiled views cleared.');

        $this->call('view:cache');
        $this->info('View cache cleared and cached successfully.');
    }
}