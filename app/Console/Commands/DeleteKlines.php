<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
class DeleteKlines extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete-klines';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all klines and create new klines';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DB::table('klines')->delete();

        $this->info('Klines deleted successfully');
        //run command
        Artisan::call('db:seed', ['--class' => 'KlineSeeder']);
        $this->info('Klines created successfully');
    }
}
