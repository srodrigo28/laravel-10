<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'id';
        protected $fillable = [
            'nome',
            'email',
            'senha',
        ];
    use HasFactory;
}
