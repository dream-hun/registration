<?php

namespace App\Models;

use App\Models\Enums\GenderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;

    protected $casts = [
        'gender' => GenderStatus::class,
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'gender',
        'department_id',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
