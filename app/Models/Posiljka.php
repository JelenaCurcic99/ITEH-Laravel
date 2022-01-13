<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kurir;
use App\Models\Primalac;

class Posiljka extends Model
{
    use HasFactory;

    public function kurir()
    {
        return $this->belongsTo(Kurir::class);
    }

    public function primalac()
    {
        return $this->belongsTo(Primalac::class);
    }
}
