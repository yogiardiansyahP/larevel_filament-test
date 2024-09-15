<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'name',
        'kelas_id',
    ];
    public function Kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
