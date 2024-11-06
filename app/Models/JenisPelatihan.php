<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisPelatihan extends Model
{
    protected $tables = "jenis_pelatihans";
    protected $guarded = [];

    public function pelatihans(): HasMany
    {
        return $this->hasMany(Pelatihan::class);
    }
}
