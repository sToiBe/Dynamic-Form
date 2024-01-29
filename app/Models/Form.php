<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Form extends Model
{
    use HasFactory;

    protected $table = 'forms';

    public function questions(): HasMany
    {
        return $this->hasMany(FormQuestion::class);
    }
}
