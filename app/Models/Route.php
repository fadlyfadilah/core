<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Route extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['route', 'permission_name', 'status', 'description'];

    protected $casts = ['status' => 'boolean'];
    
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
                ->logFillable()
                ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName}")
                ->useLogName('Route');
    }
}
