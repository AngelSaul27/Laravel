<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
    * The Artisan commands provided by your application.
    *
    * @var array
    */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function (){
            DB::table('tasks')
                ->join('task_details', 'tasks.id', '=', 'task_details.task_id')
                ->select('tasks.id', 'tasks.due_date', 'task_details.status', 'task_details.id')
                ->where('status','!=','Completed')
                ->where('status','!=','Failed')
                ->where('due_date','<',now()->format('Y-m-d'))
                ->update(['status' => 'Failed']);
        })->dailyAt('23:59');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
