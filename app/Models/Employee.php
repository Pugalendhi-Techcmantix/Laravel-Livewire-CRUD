<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    use HasFactory;

    protected $guarded = [];

    // public function getStatusAttribute()
    // {
    //     return $this->attributes['status'] == 1 ? 'Active' : 'In Active';
    // }
    
    // public function getStatusLabelAttribute()
    // {
    //     return $this->status === 1 ? 'Active' : 'Suspended';
    // }

    public function getStatusLabelAttribute()
    {
        $statusLabel = $this->status === 1 ? 'Active' : 'Suspended';
        $roleLabel = $this->role === 1 ? 'Admin' : 'Employee';

        return [
            'status' => $statusLabel,
            'role' => $roleLabel,
        ];
    }
}
