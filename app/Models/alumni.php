<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
    use HasFactory;

    public $table = 'tb_alumni';

    public $fillable = ['nim', 'nama_lengkap', 'kode_kejuruan', 'tempat_lahir', 'tgl_lahir', 'alamat', 'pekerjaan', 'ipk'];
}
