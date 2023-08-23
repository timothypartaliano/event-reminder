<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                       ->orWhere('description', 'like', '%' . $search . '%')
                       ->orWhere('address', 'like', '%' . $search . '%')
                       ->orWhere('date', 'like', '%' . $search . '%')
                       ->orWhere('start_hour', 'like', '%' . $search . '%')
                       ->orWhere('end_hour', 'like', '%' . $search . '%');
            });
        });
    }

    public function statuss()
    {
        return $this->belongsTo('App\Models\Status','status');
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
