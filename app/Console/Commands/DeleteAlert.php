<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class DeleteAlert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-alert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all entries in the alerts table';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        DB::table('alerts')->truncate();

        $this->info('All alerts have been deleted.');
    }
}
