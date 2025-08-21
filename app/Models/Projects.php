<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = ['id', 'project_name', 'budget', 'lab_id'];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function labs(){
        return $this->belongsTo(Lab::class, 'lab_id', 'id');
    }
}
