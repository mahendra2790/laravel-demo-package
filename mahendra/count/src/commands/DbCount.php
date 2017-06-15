<?php

namespace Mahendra\Count\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class DbCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:count {table}';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $this->info('Fetching data. plz wait..');
        $table = $this->argument('table');
        if(!Schema::hasTable($table)){
            return $this->info("Table $table does not exits.");
        }
        $count = DB::table($table)->count();
        return $this->info("Table $table has $count rows.");
    }
}
