<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['birth', 'sex'];
    
    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
