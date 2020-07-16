<?php

namespace App\Console\Commands;

use App\Card;
use Carbon\Carbon;
use Illuminate\Console\Command;

class RegularExecute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'regular:execute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute regular payment';

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
        $now = Carbon::now();
        Card::RegularExecute($now);
    }
}
