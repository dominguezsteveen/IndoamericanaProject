<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebMenu extends Model
{
    use HasFactory;

    public function getHijos()
    {
        return $this->hasMany(WebMenu::class, 'padre_id', 'id');
    }
}
