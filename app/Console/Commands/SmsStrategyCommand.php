<?php
namespace App\Console\Commands;

use App\SmsMethods\SmsStrategyContext;
use Illuminate\Console\Command;


class SmsStrategyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sms-strategy {smsMethod}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'display sms strategy used';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $strategyContext = new SmsStrategyContext($this->argument('smsMethod'));
        $this->info($strategyContext->sms());
    }
}
