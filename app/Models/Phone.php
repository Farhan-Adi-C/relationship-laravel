<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    use HasFactory;
    protected $fillable = ['phone_number', 'siswa_id'];

    public function siswa():BelongsTo{
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}

