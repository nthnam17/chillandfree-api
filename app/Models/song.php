<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','singer_id','producer','replay','album_id','like'
    ];

    protected $table = 'song';

    public static function getAll() {
        $data = song::get();
        return $data;
    }
}
