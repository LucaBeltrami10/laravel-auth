<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'project_name',
        'description',
        'language_used',
        'framework_used',
        'status',
        'repository_url',
    ];
}
