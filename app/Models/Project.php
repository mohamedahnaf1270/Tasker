<?php

namespace App\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;


class Project extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    // public $dates=['start_date'];
    use HasFactory;
    public function projectmanager()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
