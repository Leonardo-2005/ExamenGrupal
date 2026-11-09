<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'machine_id',
        'order_number',
        'maintenance_type',
        'status',
        'technician',
        'estimated_cost',
        'actual_cost',
        'scheduled_at',
        'completed_at',
    ];

    protected $casts = [
        'scheduled_at' => 'date',
        'completed_at' => 'date',
        'estimated_cost' => 'decimal:2',
        'actual_cost' => 'decimal:2',
    ];

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
}
