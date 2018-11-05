<?php

namespace App\Console\Commands;

use App\Jobs\EchoServer;
use Illuminate\Console\Command;

class SpawnJobsIntoQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:job';

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
    	$queues = ['brython', 'bala'];
    	for ($i = 0; $i <= 100; $i++) {
		    EchoServer::dispatch()->onQueue('bala');
		    echo "Sent Job to queue" . PHP_EOL;
		    shuffle($queues);
//		    sleep(1);
	    }
    }
}
