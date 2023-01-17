<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function last_update()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
