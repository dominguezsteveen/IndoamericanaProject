<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function getHijos()
    {
        return $this->hasMany(Menu::class, 'padre_id', 'id');
    }
}
