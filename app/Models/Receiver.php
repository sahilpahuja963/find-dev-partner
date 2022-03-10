<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Receiver extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function message(): HasMany
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
}
