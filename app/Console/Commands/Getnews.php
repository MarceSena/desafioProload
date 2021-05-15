<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\NewsController;

class Getnews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'command to pick up news and send a message to customers';

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
        $controller = app()->make('App\Http\Controllers\NewsController');
            app()->call([$controller, 'store'], [ 'request']);
    }
}
