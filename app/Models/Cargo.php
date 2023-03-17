<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cargo extends Model
{
    use HasFactory;

    static $rules = [
        'nombre' => 'required|unique:categories,name'
    ];

    protected $model = Cargo::class;
    
    protected $fillable = ['name'];
    protected $table = 'cargos';

    public function profile(){
        return $this->hasMany(Profile::class, 'profile_id', 'id');
    }


}
