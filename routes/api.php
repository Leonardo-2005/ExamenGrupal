<?php

use App\Http\Controllers\MaintenanceQueryController;
use Illuminate\Support\Facades\Route;

Route::get('/maintenance/period', [
    MaintenanceQueryController::class,
    'maintenanceByPeriod',
]);

Route::get('/maintenance/completed-date', [
    MaintenanceQueryController::class,
    'maintenanceByCompletedDate',
]);


