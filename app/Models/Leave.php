<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    const PENDING = 0;
    const MESSAGE_PENDING = '';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
