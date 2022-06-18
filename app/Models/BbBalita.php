<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BbBalita extends Model
{
    use HasFactory;
    protected $table = 'bb_balita';
	protected $primaryKey = 'id_bbBalita';
}
