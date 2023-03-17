<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Evaluation extends Model
{
    use HasFactory;
    protected $guarded = ['status'];
    protected $table = 'evaluations';

    public function profile(){
        return $this->hasOne(Profile::class, 'id', 'profile_id');
    }

}
