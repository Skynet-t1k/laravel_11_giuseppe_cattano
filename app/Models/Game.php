<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name',
        'review',
        'img',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
