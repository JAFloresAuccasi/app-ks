<?php

namespace App\Models;

use App\Models\customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model 
{
use HasFactory;
protected $table = "testData";
protected $primaryKey = "id";
protected $allowedFields = ['name',
'apellido',
'email',
'genero',
];
}
