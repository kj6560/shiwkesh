<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('sitemap:generate')->everyMinute()->withoutOverlapping()->runInBackground();
$schedule->command('command:backup')->everySixHours()->withoutOverlapping()->runInBackground();