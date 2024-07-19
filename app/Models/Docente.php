<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Docente extends Model
{
    use HasFactory;
    protected $table = 'docentes';
    protected $guarded = [];

    public function programa_anuals(): HasMany
    {
        return $this->hasMany(ProgramaAnual::class);
    }
}
