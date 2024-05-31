<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TicketType extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    public function evenements(): BelongsTo
    {
        return $this->belongsTo(Evenement::class);
    }
}
