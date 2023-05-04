<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZoomMeeting extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
}