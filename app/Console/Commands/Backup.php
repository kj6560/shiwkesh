<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Backup extends Command
{
       /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dbBackup = new \App\Console\Commands\models\DatabaseBackup();
        $dbBackup->run();
        return 0;
    }
}
