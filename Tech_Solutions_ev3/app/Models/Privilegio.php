<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    use HasFactory;

    
    protected $table = 'privilegios';

    
    protected $fillable = [
        'nombre',
        'icono',
        'color',
        'user_id_create',
        'user_id_last_update',
        'activo'
    ];

    public function userCreate()
    {
        return $this->belongsTo(User::class, 'user_id_create');
    }
    public function userLastUpdate()
    {
        return $this->belongsTo(User::class, 'user_id_last_update');
    }
}