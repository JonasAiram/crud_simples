<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    use HasFactory;

    protected $table='motoristas';
    protected $fillable=['nome', 'cpf', 'email', 'status', 'situacao'];

}
