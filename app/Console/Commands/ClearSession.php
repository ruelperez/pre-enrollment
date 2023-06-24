<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ClearSession extends Command
{
    protected $signature = 'session:clear';

    protected $description = 'Clear all session data';

    public function handle()
    {
        Cache::flush();
        $this->info('Session data cleared.');
    }
}
