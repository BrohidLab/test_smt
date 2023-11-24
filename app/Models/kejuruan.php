<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kejuruan extends Model
{
    use HasFactory;

    public $table = 'tb_kejuruan';

    protected $fillable = ['kode_kejurusan', 'jurusan'];
}
