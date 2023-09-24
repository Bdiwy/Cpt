<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class expiretion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expiere';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'user expiere sub';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
