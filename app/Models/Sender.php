<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sender extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'sender_id');
    }
}
