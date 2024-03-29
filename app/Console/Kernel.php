<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
         Commands\SendSms::class,
         Commands\ClearAttendants::class,
         Commands\SendDeskSms::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        
        $schedule->call(function () {
            $this->call('sms:send');                 
        })->everyMinute();
        
        $schedule->call(function () {
            \DB::statement('CALL log_stats();');                  
        })->everyFiveMinutes();
        
    }
}