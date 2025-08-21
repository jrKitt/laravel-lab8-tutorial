<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researchers extends Model
{
    protected $fillable = ['id', 're_name', 're_position', 'lab_id'];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function labs(){
        return $this->belongsTo(Lab::class, 'lab_id', 'id');
    }
}
