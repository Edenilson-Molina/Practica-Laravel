<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aula extends Model
{
    use HasFactory;
    protected $table = 'aulas';
    protected $guarded = [];

    public function grado(): BelongsTo
    {
        return $this->belongsTo(Grado::class);
    }
}
