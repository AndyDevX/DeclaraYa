<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CatRegimen extends Model
{
    use HasFactory;

    protected $fillable = [
        'regimen',
    ];

    public function users(): HasMany {
        return $this->hasMany(User::class, 'cat_regimen_id');
    }
}
