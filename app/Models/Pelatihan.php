<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelatihan extends Model
{
    protected $tables = "pelatihans";
    protected $guarded = [];

    public function jenisPelatihan(): BelongsTo
    {
        return $this->belongsTo(JenisPelatihan::class);
    }
    public function peserta(): BelongsTo
    {
        return $this->belongsTo(Peserta::class);
    }
}
