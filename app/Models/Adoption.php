<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{

    use HasFactory;
    protected $table = 'adopcion';
    protected $fillable = [
        'fecha_adopcion',
        'animal_adopcioncol',
        'usuarios_id_usuario',
        'img',
        'created_at',
        'updated_at',
        'probablidad',
        'adoption_status',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'usuarios_id_usuario');
    }

    public function animals()
    {
        return $this->belongsTo(Animal::class, 'animal_adopcioncol');
    }
}
