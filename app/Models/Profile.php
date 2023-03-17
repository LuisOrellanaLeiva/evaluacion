<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evaluation;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rut', 'estado', 'cargo_id', 'user_id'];
    protected $table = 'profiles';

    public function cargo()
    {
        return $this->hasOne(Cargo::class, 'id', 'cargo_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function colaboradores()
    {
        return $this->belongsToMany(Profile::class, 'jefatura_colaborador', 'jefatura_id', 'colaborador_id');
    }

    public function jefes()
    {
        return $this->belongsToMany(Profile::class, 'jefatura_colaborador', 'colaborador_id', 'jefatura_id');
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluation::class, 'profile_id', 'id');
    }
}
