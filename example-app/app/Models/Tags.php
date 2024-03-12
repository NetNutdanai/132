<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'oeis_tags';

    protected $fillable = [
        'tag_name'
    ];
}
