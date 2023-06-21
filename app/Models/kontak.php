<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    use HasFactory;
    protected $tables = "kontaks";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
