<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbBalita extends Model
{
    use HasFactory;
    protected $table = 'tb_balita';
	protected $primaryKey = 'id_tbBalita';
}
