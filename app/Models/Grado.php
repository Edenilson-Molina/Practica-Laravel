<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Grado extends Model
{
    use HasFactory;
    protected $table = 'grados';
    protected $fillable = ['nombre_grado'];

    public function aula(): HasOne
    {
        return $this->hasOne(Aula::class);
    }
}
