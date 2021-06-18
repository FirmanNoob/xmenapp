<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $table = 'hero';
    protected $fillable = ['hero', 'jenkel'];

    public function skill()
    {
        return $this->hasMany(Skill::class, 'hero_id');
    }
}
