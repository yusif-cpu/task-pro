<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    public $fillable = ['title'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
