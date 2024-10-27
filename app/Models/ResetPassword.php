<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'token'
    ];

    public function userR() {
        return $this->hasOne(User::class, 'email' , 'email');
    }
}
