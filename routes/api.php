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

Route::get('/machines/production-lines', [
    MaintenanceQueryController::class,
    'machinesWithProductionLine',
]);

Route::get('/machines/maintenance-count', [
    MaintenanceQueryController::class,
    'machinesWithMaintenanceCount',
]);

Route::get('/machines/operational-critical', [
    MaintenanceQueryController::class,
    'operationalCriticalMachines',
]);

Route::get('/machines/pending-corrective', [
    MaintenanceQueryController::class,
    'machinesWithPendingCorrectiveMaintenance',
]);
