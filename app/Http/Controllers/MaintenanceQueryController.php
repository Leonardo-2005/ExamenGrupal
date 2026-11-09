<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\MaintenanceOrder;
use Illuminate\Http\Request;

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

    public function machinesWithProductionLine()
    {
        $results = Machine::query()
            ->with('productionLine:id,name,location')
            ->select(
                'id',
                'production_line_id',
                'code',
                'name',
                'type',
                'status',
                'criticality'
            )
            ->orderBy('name', 'asc')
            ->get();

        return response()->json($results);
    }

    public function machinesWithMaintenanceCount()
    {
        $results = Machine::query()
            ->withCount('maintenanceOrders')
            ->select('id', 'code', 'name', 'status', 'criticality')
            ->orderByDesc('maintenance_orders_count')
            ->get();

        return response()->json($results);
    }

    public function operationalCriticalMachines()
    {
        $results = Machine::query()
            ->where(function ($query) {
                $query->where('status', 'operativa')
                    ->orWhere('status', 'mantenimiento');
            })
            ->where('criticality', 'alta')
            ->select('code', 'name', 'type', 'status', 'criticality')
            ->get();

        return response()->json($results);
    }

    public function machinesWithPendingCorrectiveMaintenance()
    {
        $results = Machine::query()
            ->whereHas('maintenanceOrders', function ($query) {
                $query->where('maintenance_type', 'correctivo')
                    ->where('status', 'pendiente')
                    ->whereNull('completed_at');
            })
            ->with('productionLine:id,name')
            ->select('id', 'production_line_id', 'code', 'name', 'status', 'criticality')
            ->get();

        return response()->json($results);
    }
}
