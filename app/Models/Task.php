<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks'; // Nome da tabela associada ao Model

    protected $fillable = [
        'nome',
        'descrição',
        'status',
    ];
}
