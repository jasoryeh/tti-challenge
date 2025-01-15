<?php

namespace App\Models;

use Database\Factories\TaskFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    const STATUS_TO_DO = 'to_do';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_DONE = 'done';

    protected static function newFactory()
    {
        return TaskFactory::new();
    }
}