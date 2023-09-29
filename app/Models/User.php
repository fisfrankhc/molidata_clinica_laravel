<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "usuarios";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'name',
        'user_nombre',
        'email',
        'user_telefono',
        'password',
        'rol_id',
        'sucursal_id',
        'user_estado',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function rolDeUsuario(){
        /* $rolDeUsuario = Role::where($this->id, 'rol_id');
        return $rolDeUsuario; */
        return $this->hasOne(Role::class, 'id', 'rol_id');
    }

    public function sucursalDeUsuario(){
        return $this->hasOne(Sucursale::class, 'id', 'sucursal_id');
    }

}
