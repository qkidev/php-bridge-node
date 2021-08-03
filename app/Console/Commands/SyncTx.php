<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SyncTxService;

class SyncTx extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SyncTx';

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
        $SyncTxService = new SyncTxService("qki");
        $SyncTxService->Sync();
        $SyncTxService->setChain("heco");
        $SyncTxService->Sync();
        return 0;
    }
}
