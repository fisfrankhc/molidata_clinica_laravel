<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = "roles";
    protected $primaryKey='id';
    protected $fillable = [
        'rol_name',
        'rol_description',
    ];

    protected $guarded=[];
    public $timestamps=false;
}
