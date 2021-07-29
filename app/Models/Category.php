<?php

namespace App\Models;

use App\Models\Child;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function subcategory()
    {
        return $this->hasMany(Child::class, 'category_id', 'id');
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

}
