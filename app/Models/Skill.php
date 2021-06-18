<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $table = 'skill';
    protected $fillable = ['hero_id', 'skill'];

    public function hero()
    {
        return $this->belongsTo(Hero::class);
    }
}
