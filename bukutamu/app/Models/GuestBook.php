<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestBook extends Model
{
    protected $fillable = [
        'user_id',
        'nama',
        'pesan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}