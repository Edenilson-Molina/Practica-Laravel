<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgramaAnual extends Model
{
    use HasFactory;
    protected $table = 'programa_anuals';
    protected $guarded = [];

    public function docente(): BelongsTo
    {
        return $this->belongsTo(Docente::class);
    }

    public function aula(): BelongsTo
    {
        return $this->belongsTo(Aula::class);
    }
}
