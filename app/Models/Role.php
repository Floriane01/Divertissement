<?php

namespace App\Models;

use App\Models\TypeRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role as OriginalModelRole;

class Role extends OriginalModelRole
{
    use HasFactory, SoftDeletes;

    protected static function boot() {

        parent::boot();

        if (!app()->runningInConsole() && auth()->check()) {
            $userFullName = Auth::user()->nom . " " . Auth::user()->prenom;

            static::creating(function ($role) use ($userFullName) {
                $role->created_by = $userFullName;
            });

            static::updating(function ($role) use ($userFullName) {
                $role->updated_by = $userFullName;
            });

            static::deleting(function ($role) use ($userFullName) {
                $role->deleted_by = $userFullName;
                $role->save();
            });
        }

    }

    public function typerole(): BelongsTo
    {
        return $this->belongsTo(TypeRole::class, 'type_role_id', 'id');
    }
}
