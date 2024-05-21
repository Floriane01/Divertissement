<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Utilisateur extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    // public function roles(): BelongsToMany
    // {
    //     return $this->belongsToMany(Role::class);
    // }

    public function evenements(): BelongsToMany
    {
        return $this->belongsToMany(Evenement::class);
    }
}
