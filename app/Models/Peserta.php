<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Peserta extends Model
{
    protected $tables = "pesertas";
    protected $guarded = [];

    public function pelatihans(): HasMany
    {
        return $this->hasMany(Pelatihan::class);
    }
}
