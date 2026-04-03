<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'acceso_san_nicolas',
        'acceso_woodmont',
        'acceso_mckinney',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_admin' => 'boolean',
            'acceso_san_nicolas' => 'boolean',
            'acceso_woodmont' => 'boolean',
            'acceso_mckinney' => 'boolean',
        ];
    }

    // --- LA LÓGICA DE SEGURIDAD DE FILAMENT ---
    public function canAccessPanel(Panel $panel): bool
    {
        // El admin siempre puede entrar a todo
        if ($this->is_admin) {
            return true;
        }

        // Para los demás usuarios, verificamos el panel al que intentan entrar
        return match ($panel->getId()) {
            'san-nicolas' => $this->acceso_san_nicolas,
            'woodmont' => $this->acceso_woodmont,
            'mckinney' => $this->acceso_mckinney,
            default => false,
        };
    }
}
