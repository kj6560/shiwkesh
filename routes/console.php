<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('sitemap:generate')->everyMinute()->withoutOverlapping()->runInBackground();
Schedule::command('command:backup')->everyOddHour()->withoutOverlapping()->runInBackground();