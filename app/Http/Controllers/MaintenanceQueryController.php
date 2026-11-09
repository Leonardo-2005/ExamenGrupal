<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\MaintenanceOrder;

class MaintenanceQueryController extends Controller
{
    public function maintenanceByPeriod()
    {
        $results = MaintenanceOrder::query()
            ->select(
                'order_number',
                'maintenance_type',
                'status',
                'technician',
                'estimated_cost',
                'scheduled_at'
            )
            ->whereBetween('scheduled_at', ['2026-01-01', '2026-12-31'])
            ->orderBy('scheduled_at', 'asc')
            ->get();

        return response()->json($results);
    }

    public function maintenanceByCompletedDate()
    {
        $results = MaintenanceOrder::query()
            ->select(
                'order_number',
                'machine_id',
                'maintenance_type',
                'technician',
                'actual_cost',
                'completed_at'
            )
            ->whereDate('completed_at', '2026-01-11')
            ->orderBy('order_number', 'asc')
            ->get();

        return response()->json($results);
    }

  


}
