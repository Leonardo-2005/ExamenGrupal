<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $fillable = [
        'production_line_id',
        'code',
        'name',
        'type',
        'status',
        'criticality',
    ];

    public function productionLine()
    {
        return $this->belongsTo(ProductionLine::class);
    }

    public function maintenanceOrders()
    {
        return $this->hasMany(MaintenanceOrder::class);
    }
}
