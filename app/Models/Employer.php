<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;
use Illuminate\Database\Eloquent\Relations\hasMany;


class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function jobs(): hasMany {
        return $this->hasMany(Job::class);
    }
}
